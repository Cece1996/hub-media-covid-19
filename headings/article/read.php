<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars(_e($data['article']['titre']), ENT_QUOTES, 'UTF-8') ?> | COVID-19 Infos</title>

    <meta name="theme-color" content="#030946">

    <meta name="author" content="Ecole 241">
    <meta name="description" content="<?= trunc(strip_tags(_e($data['article']['description'])), 50) ?>">
    <meta name="keywords" content="HUB MÉDIA, COVID-19, COVID-19 Infos, Coronavirus, Coronavirus Gabon, Ecole 241, OkaCode, Infos coronavirus, Alert coronavirus, en direct coronavirus, covid19, gabon actualité covid19, gabon recommandation mesures covid19">

    <meta name="og:title" content="<?= htmlspecialchars(_e($data['article']['titre']), ENT_QUOTES, 'UTF-8') ?>">
    <meta name="og:type" content="article">
    <meta name="og:image" content="<?= _e($data['article']['image']) ?>" />
    <meta name="og:url" content="<?= _e($data['article']['share_link']) ?>" />
    <meta name="og:site_name" content="HUB MÉDIA - COVID-19">
    <meta name="og:description" content="<?= trunc(strip_tags(_e($data['article']['description'])), 50) ?>">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@hubmediacovid19">
    <meta name="twitter:title" content="<?= htmlspecialchars(_e($data['article']['titre']), ENT_QUOTES, 'UTF-8') ?> | COVID-19 Infos">
    <meta name="twitter:description" content="<?= trunc(strip_tags(_e($data['article']['description'])), 50) ?>">
    <meta name="twitter:image" content="<?= _e($data['article']['image']) ?>">

    <link rel="icon" type="image/x-icon" href="<?= asset('assets/img/logo-covid.png', 'covid'); ?>">


    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= asset('assets/css/read.css', 'covid'); ?>">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161415127-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-161415127-1');
    </script>

    <!-- Configuration pour la PWA -->
    <link rel="manifest" href="/manifest.json">
    <link rel="apple-touch-icon" href="<?= asset('assets/img/icons/icon-96x96.png'); ?>">
    <meta name="apple-mobile-web-app-status-bar" content="#FFE1C4">
    <script src="<?= asset('assets/js/app.js'); ?>"></script>
</head>

<body>
    <div class="coming-soon">La version pilote du projet n'est disponible que pour smartphone</div>
    <header>
        <nav>
            <div class="back" data-url=".">
                <i class="fas fa-angle-left"></i><span>Retour</span>
            </div>
            <ul>
                <li data-url="."><i class="fas fa-globe"></i> Actualités</li>
                <li <?= ($data['categorie'] == 'SENSIBILISATION') ? 'class="active"' : '' ?> data-url="<?= route('rubrique', ['r' => 'sensibilisation']) ?>"><i class="fas fa-info-circle"></i> Sensibilisation</li>
                <li <?= ($data['categorie'] == 'MESURES') ? 'class="active"' : '' ?> data-url="<?= route('rubrique', ['r' => 'mesures-gouvernementales']) ?>"><i class="fas fa-university"></i> Mesures gouvernementales</li>
                <li <?= ($data['categorie'] == 'POINT-PRESSE') ? 'class="active"' : '' ?> data-url="<?= route('rubrique', ['r' => 'points-de-presse']) ?>"><i class="fas fa-newspaper"></i> Points de presse</li>
                <li <?= ($data['categorie'] == 'FAKE') ? 'class="active"' : '' ?> data-url="<?= route('rubrique', ['r' => 'fake-news']) ?>"><i class="fas fa-head-side-cough-slash"></i> Fake news</li>
                <li <?= ($data['categorie'] == 'CARTES') ? 'class="active"' : '' ?> data-url="<?= route('rubrique', ['r' => 'cartes']) ?>"><i class="fas fa-map"></i> Cartes</li>
                <li <?= ($data['categorie'] == 'JEUX') ? 'class="active"' : '' ?> data-url="<?= route('rubrique', ['r' => 'jeux']) ?>"><i class="fas fa-gamepad"></i> Jeux</li>
            </ul>
        </nav>
    </header>
    <main>
        <h1><?= _e($data['article']['titre']) ?></h1>
        <p class="source-date"><a href="<?= _e($data['article']['source_lien']) ?>">Sources :</a> <?= _e($data['article']['source_nom']) ?> - <?= _e($data['article']['pub_date']) ?></p>
        <img src="<?= _e($data['article']['image']) ?>" alt="<?= _e($data['article']['titre']) ?>">
        <div class="texte">
            <?= _e($data['article']['contenu']) ?>
        </div>
        <div class="like hide">
            <i data-url="<?= route('article-like', ['article' => $data['article']['id'], 'userToken' => '']) ?>" class="far fa-thumbs-up"><?= ($data['likes'] > 0) ? '<span>' . _e($data['likes']) . '</span>' : '' ?></i>
            <i data-url="<?= route('article-dislike', ['article' => $data['article']['id'], 'userToken' => '']) ?>" class="far fa-thumbs-down"><?= ($data['dislikes'] > 0) ? '<span>' . _e($data['dislikes']) . '</span>' : '' ?></i>
        </div>
        <h2 class="fs-17">Partager</h2>
        <div class="share">
            <span data-url="whatsapp://send?text=<?= $data['article']['share_link'] ?>&source=&data="><i class="effet-clic-plus fab fa-whatsapp fa-2x"></i></span>
            <span data-url="https://www.facebook.com/sharer/sharer.php?u=<?= $data['article']['share_link'] ?>"><i class="effet-clic-plus fab fa-facebook fa-2x"></i></span>
            <span data-url="https://www.linkedin.com/shareArticle?mini=true&url=<?= $data['article']['share_link'] ?>&title=<?= htmlspecialchars(_e($data['article']['titre']), ENT_QUOTES, 'UTF-8') ?>&summary=<?= trunc(strip_tags(_e($data['article']['contenu'])), 50) ?>&source=<?= $data['article']['share_link'] ?>"><i class="effet-clic-plus fab fa-linkedin fa-2x"></i></span>
            <span data-url="https://twitter.com/share?url=<?= $data['article']['share_link'] ?>"><i class="effet-clic-plus fab fa-twitter-square fa-2x"></i></span>
        </div>
        <div class="publicite mt-30">
            <div>
                <p></p>
            </div> <img src="https://gaboninfoslive.files.wordpress.com/2016/07/sans-titre-00053.png" alt="article">
        </div>
        <div class="lire-aussi">
            <h2 <?php (count($data['autres']) > 0) ? 'class="hide"' : '' ?>>Lire aussi</h2>
            <?php foreach ($data['autres'] as $article) : ?>
                <div class="article effet-clic" id="<?= $article['id'] ?>">
                    <div class="image" style="background-image:url(<?= $article['image'] ?>)"></div>
                    <div class="infos">
                        <div class="content">
                            <div class="top">
                                <span><?= temps_ecoule($article['pub_date']) ?></span>
                                <span class="vues"><?= ($article['vues'] > 0) ? '<i class="fa fa-eye"></i> ' . $article['vues'] : '' ?></span>
                            </div>
                            <p><?= _e($article['titre']) ?></p>
                            <div class="actu-footer"><span class="source"><?= $article['source_nom'] ?></span></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <script>
        (function() {

            els('.article').forEach(function(article) {
                article.addEventListener('click', function() {
                    if (article.id) {
                        location.href = '<?php echo route('article-read', ['article' => '']) ?>' + article.id;
                    }
                })
            });

            els('nav ul li').forEach(function(rubrique) {
                rubrique.addEventListener('click', function() {
                    if (rubrique.dataset.url) {
                        location.href = rubrique.dataset.url;
                    }
                })
            });

            els('.back').forEach(function(rubrique) {
                rubrique.addEventListener('click', function() {
                    window.history.back();
                })
            });

            els('.share span').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    if (btn.dataset.url) {
                        location.href = btn.dataset.url;
                    }
                })
            });

            els('.like i').forEach(function(pouce) {
                pouce.addEventListener('click', function() {
                    if (pouce.dataset.url) {
                        location.href = pouce.dataset.url + getUserToken();
                    }
                })
            });

            if (window.history.length === 1) {
                el('.back').className = 'hide';
                el('nav > ul').style.paddingLeft = '10px';
            }

            function els(seletor) {
                return document.querySelectorAll(seletor);
            }

            function el(seletor) {
                return document.querySelector(seletor);
            }

            function setCookie(cname, cvalue, exdays) {
                var d = new Date();
                d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                var expires = "expires=" + d.toUTCString();
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            }

            function getCookie(cname) {
                var name = cname + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }

            function getUserToken() {
                let userToken = getCookie("userToken");
                if (userToken == "") {
                    let d = new Date();
                    userToken = d.getTime() + "-" + (Math.floor(Math.random() * 100000) + 1000);
                    setCookie("userToken", userToken, 365);
                }
                return userToken;
            }
        })();
    </script>

</body>

</html>