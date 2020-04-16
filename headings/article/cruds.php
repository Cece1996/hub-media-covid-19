<?php

function stats($return = false)
{
    $debut = '<table class="infobox"';
    $fin = '</table>';
    $delimiter = '</tr>';

    $handle = curl_init();

    $url = "https://en.wikipedia.org/wiki/2020_coronavirus_pandemic_in_Africa";

    // Set the url
    curl_setopt($handle, CURLOPT_URL, $url);
    // Set the result output to be a string.
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);

    $output = curl_exec($handle);

    curl_close($handle);

    if (!$output) return array();

    $debut_pos = strpos($output, $debut, 0);
    $fin_pos = strpos($output, $fin, $debut_pos);
    $taille_html = $fin_pos - $debut_pos + strlen($fin);

    $stats_html = substr($output, $debut_pos, $taille_html);

    $stats_tab = explode($delimiter, $stats_html);

    $stats_tab = array_map(function ($item) {
        $formatted = array();
        $item = explode('</th>', $item);
        $item[0] = strip_tags($item[0]);
        if (isset($item[1]) and !empty($item[1])) {
            $item[1] = ltrim($item[1], '<td>');
            $item[1] = substr($item[1], 0, strpos($item[1], '<'));
            $item[$item[0]] = $item[1];
            return array($item[0] => $item[1]);
        }
    }, $stats_tab);


    // On recupere la date de dermiere mise a jour des stats
    $date_debut = '"footer-info-lastmod"';
    $date_fin = '<span ';
    $date_debut_pos = strpos($output, $date_debut, 0);
    $date_fin_pos = strpos($output, $date_fin, $date_debut_pos);
    $taille_date_html = $date_fin_pos - $date_debut_pos;

    $date_html = substr($output, $date_debut_pos, $taille_date_html);
    $pub_date = trim(explode('on', $date_html)[1]);

    // On ne garde que les informations qui nous interressent
    $stats = array();
    $fields = array("Confirmed cases", "Recovered", "Deaths", "Territories");
    foreach ($stats_tab as $value) {
        if (!$value) continue;
        if (isset(array_keys($value)[0])) {
            $label = array_keys($value)[0];
            if (in_array($label, $fields)) {
                $key = str_replace(' ', '_', strtolower($label));
                $stats[$key] = array(
                    'label' => $label,
                    'data' => str_replace(',', '.', array_values($value)[0]),
                );
            }
        }
    }

    $stats['update_time'] = $pub_date;
    $stats['source'] = $url;

    if ($return) return $stats;
    else {
        header('Content-Type: application/json');
        echo json_encode($stats);
    }
}


function liste()
{
    $articles = x('SELECT * FROM ' . heading('table', 'article') . ' ORDER BY pub_date DESC');

    if ($articles) {
        $articles = $articles->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $articles = array();
    }

    dump($articles);
}

function rubrique()
{
    $articles = x('SELECT * FROM ' . heading('table', 'article') . ' ORDER BY pub_date DESC');

    if ($articles) {
        $articles = $articles->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $articles = array();
    }
    $slider = array();

    if (count($articles) > 3) {
        $slider = array_splice($articles, 0, 3);
        /*$articles = array_splice($articles, 3);*/
    }

    $stats = stats(true);

    $data = array(
        'slider' => $slider,
        'articles' => $articles,
        'stats' => $stats
    );

    load_page('index', $data);
}

function home()
{
    $rubrique = '';

    if (isset($_GET['r']) and !empty($_GET['r'])) {

        $rubrique = $_GET['r'];

        $categorie = '';

        switch ($rubrique) {
            case 'sensibilisation':
                $categorie = 'SENSIBILISATION';
                break;
            case 'mesures-gouvernementales':
                $categorie = 'MESURES';
                break;
            case 'points-de-presse':
                $categorie = 'POINT-PRESSE';
                break;
            case 'fake-news':
                $categorie = 'FAKE';
                break;
            case 'cartes':
                $categorie = 'CARTES';
                break;
            case 'jeux':
                $categorie = 'JEUX';
                break;
            default:
                $categorie = '';
                break;
        }
    }

    $sql = 'SELECT * FROM ' . heading('table');

    if (!empty($categorie)) {
        $sql .= ' WHERE categorie = \'' . $categorie . '\'';
    }
    
    $sql .= ' ORDER BY pub_date DESC';

    $articles = x($sql);

    if ($articles) {
        $articles = $articles->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $articles = array();
    }

    $slider = array();

    if (count($articles) > 3) {
        $slider = array_splice($articles, 0, 3);
    } else if (count($articles) > 0) {
        $slider = array_splice($articles, 0, count($articles));
    }


    /* Recuperation des statistiques du Gabon */
    $stats = x('SELECT * FROM cov_stats ORDER BY id DESC LIMIT 1');

    if ($stats) {
        $stats = $stats->fetch(PDO::FETCH_ASSOC);
    } else {
        $stats = array();
    }

    $data = array(
        'slider' => $slider,
        'articles' => $articles,
        'active' => $rubrique,
        'stats' => $stats
    );

    load_page('index', $data);
}

function add()
{
    redirect('publication-add');
}

function readlocal()
{
    load_page('read-local');
}

function read()
{
    $params = array(
        'id' => $_GET['article'],
    );

    $article = one(heading('table'), $params);

    if ($article) {

        $vues = $article['vues'] + 1;
        e(heading('table'), ['vues' => $vues], $article['id']);

        $article['share_link'] = urlencode(root_url() . route('article-read', ['article' => $article['id']]));
        $article['pub_date'] = temps_ecoule($article['pub_date']);

        $likes_str = $article['likes'];

        /* Recuperation d'autres articles */
        $autres = x('SELECT * FROM ' . heading('table') . ' WHERE id <> ' .  $article['id'] . " and categorie = '" . $article['categorie'] . "' ORDER BY pub_date DESC LIMIT 5");

        if ($autres) {
            $autres = $autres->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $autres = array();
        }

        $data = array(
            'article' => $article,
            'autres' => $autres,
            'categorie' => $article['categorie'],
            'likes' => substr_count($article['likes'], "-"),
            'dislikes' => substr_count($article['dislikes'], "-")
        );

        load_page('read', $data);
    } else {
        redirect('article-home');
    }
}

function save()
{
    requiere_post();

    if (isset($_POST['id'])) {

        $params = array(
            'id' => $_POST['id']
        );
        $user = one(heading('table'), $params);

        if ($user) {
            if (!isset($_POST['pass']) or empty($_POST['pass'])) {
                unset($_POST['pass']);
            } else {
                $_POST['pass'] = md5($_POST['pass']);
            }
            $res = e(heading('table'), $_POST, $user['id']);
            if ($res) {
                if ($user['username'] == $_SESSION['u']) {
                    $_SESSION['n'] = $_POST['name'];
                    $profile = (int) $_POST['profile'];
                    switch ($profile) {
                        case 1:
                            $_SESSION['profile'] = 'Administrateur';
                            break;
                        case 2:
                            $_SESSION['profile'] = 'Sage Femme';
                            break;
                        case 3:
                            $_SESSION['profile'] = 'Major';
                            break;
                        case 4:
                            $_SESSION['profile'] = 'Agent de mairie';
                            break;
                    }
                    $_SESSION['p'] = $_POST['profile'];
                    //var_dump($user); dump($_SESSION);
                }
                redirect('user-home');
            } else redirect('user-edit', ['id' => $user['id']]);
        }
    } else {

        //dump($_POST);

        $params = array(
            'titre' => $_POST['titre']
        );

        $article = one(heading('table'), $params);

        if ($article) {

            redirect('article-read', ['article' => $article['id']]);
        }

        $_POST['titre'] = addslashes($_POST['titre']);
        $_POST['description'] = addslashes($_POST['contenu']);
        $_POST['contenu'] = addslashes($_POST['contenu']);

        $_POST['pub_date'] = date('Y-m-d H:i:s');

        $new_article = e(heading('table'), $_POST);

        if ($new_article) {
            redirect('article-home');
        } else {
            redirect('article-add');
        }
    }
}

function like()
{
    if (isset($_GET['article']) and !empty($_GET['article'])) {

        if (!isset($_GET['userToken']) or empty($_GET['userToken'])) {

            redirect('article-read', ['article' => $_GET['article']]);
        }

        $params = array(
            'id' => $_GET['article']
        );

        $article = one(heading('table'), $params);

        if ($article) {

            $userToken = $_GET['userToken'];

            $likers = $article['likes'];
            $dislikers = $article['dislikes'];

            if (strpos($likers, $userToken) === false) {
                $likers .= $userToken . ',';

                $dislikers = str_replace($userToken . ',', '', $dislikers);
            } else {
                $likers = str_replace($userToken . ',', '', $likers);
            }

            e(heading('table'), ['likes' => $likers, 'dislikes' => $dislikers], $article['id']);

            redirect('article-read', ['article' => $article['id']]);
        } else {
            redirect('article-home');
        }
    } else {
        redirect('article-home');
    }
}

function dislike()
{
    if (isset($_GET['article']) and !empty($_GET['article'])) {

        if (!isset($_GET['userToken']) or empty($_GET['userToken'])) {

            redirect('article-read', ['article' => $_GET['article']]);
        }

        $params = array(
            'id' => $_GET['article']
        );

        $article = one(heading('table'), $params);

        if ($article) {

            $userToken = $_GET['userToken'];

            $likers = $article['likes'];
            $dislikers = $article['dislikes'];

            if (strpos($dislikers, $userToken) === false) {
                $dislikers .=  $userToken . ',';

                $likers = str_replace($userToken . ',', '', $likers);
            } else {
                $dislikers = str_replace($userToken . ',', '', $dislikers);
            }

            e(heading('table'), ['likes' => $likers, 'dislikes' => $dislikers], $article['id']);

            redirect('article-read', ['article' => $article['id']]);
        } else {
            redirect('article-home');
        }
    } else {
        redirect('article-home');
    }
}
