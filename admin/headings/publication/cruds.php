<?php

function home()
{
    $articles = x('SELECT * FROM ' . heading('table') . ' ORDER BY pub_date DESC');

    if ($articles) {
        $articles = $articles->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $articles = array();
    }

    if (count($articles) > 0) $articles = handle_data($articles);

    trace('Listing des articles par ' . session('n'));

    load_view('index', $articles);
}

function edit()
{
    $params = array(
        'id' => $_GET['id'],
    );

    $article = one(heading('table'), $params);

    if ($article) {
        load_view('edit', $article);
    } else {
        redirect('publication-home');
    }
}

function add()
{
    load_view('add');
}

function save()
{
    requiere_post();

    if (isset($_POST['id'])) {

        $params = array(
            'id' => $_POST['id']
        );
        $article = one(heading('table'), $params);

        if ($article) {
            $_POST['titre'] = addslashes($_POST['titre']);
            $_POST['description'] = addslashes($_POST['contenu']);
            $_POST['contenu'] = addslashes($_POST['contenu']);

            $res = e(heading('table'), $_POST, $article['id']);
            if ($res) {
                flash('L\'article a été modifié correctement');
                redirect('publication-home');
            } else {
                l(true);
                flash('Une erreur s\'est produite lors de la modification de l\'article', 'error');
                redirect('publication-edit', ['id' => $article['id']]);
            }
        } else {
            flash('L\'article demandé est introuvable', 'error');
            redirect('publication-home');
        }
    } else {

        $params = array(
            'titre' => $_POST['titre']
        );

        $article = one(heading('table'), $params);

        if ($article) {
            flash('Cet article existe déjà', 'error');
            redirect('publication-add');
        }

        $_POST['titre'] = addslashes($_POST['titre']);
        $_POST['description'] = addslashes($_POST['contenu']);
        $_POST['contenu'] = addslashes($_POST['contenu']);

        $_POST['pub_date'] = date('Y-m-d H:i:s');

        $new_article = e(heading('table'), $_POST);

        if ($new_article) {
            flash('L\'article a été créé avec succès');
            redirect('publication-home');
        } else {
            $_SESSION['titre'] = $_POST['titre'];
            $_SESSION['description'] = $_POST['description'];
            $_SESSION['contenu'] = $_POST['contenu'];
            flash('Une erreur s\'est produite lors de la création de l\'article<br>' . l('return'), 'error');
            redirect('publication-add');
        }
    }
}

function delete()
{
    $params = array(
        'id' => $_GET['id'],
    );

    $article = one(heading('table'), $params);

    if ($article) {
        if (d(heading('table'), $params)) {
            flash("L'artcile a bien été supprimé");
        } else {
            flash(l('return'), 'error');
        }
    } else {
        flash(l('return'), 'error');
    }

    redirect('publication-home');
}
