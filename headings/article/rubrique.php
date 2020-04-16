<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUB MÉDIA - COVID-19</title>

    <link rel="manifest" href="/manifest.json">

    <meta name="theme-color" content="#030946">

    <link rel="apple-touch-icon" href="<?= asset('assets/img/icons/icon-96x96.png'); ?>">
    <meta name="apple-mobile-web-app-status-bar" content="#FFE1C4">
    <script src="<?= asset('assets/js/app.js'); ?>"></script>

    <meta name="author" content="Ecole 241">
    <meta name="description" content="HUB MÉDIA - COVID-19, est une plateforme de centralisation des informations autour du COVID-19 permettant de suivre l'évolution du coronavirus au Gabon.">
    <meta name="keywords" content="HUB MÉDIA, COVID-19, COVID-19 Infos, Coronavirus, Coronavirus Gabon, Ecole 241, OkaCode, Infos coronavirus, Alert coronavirus, en direct coronavirus, covid19, gabon actualité covid19, gabon recommandation mesures covid19">

    <meta name="og:title" content="HUB MÉDIA - COVID-19">
    <meta name="og:type" content="website">
    <meta name="og:image" content="<?= asset('assets/img/logo-covid.png', 'covid'); ?>" />
    <meta name="og:url" content="<?= root_url(); ?>" />
    <meta name="og:site_name" content="HUB MÉDIA - COVID-19">
    <meta name="og:description" content="HUB MÉDIA - COVID-19, est une plateforme de centralisation des informations autour du COVID-19 permettant de suivre l'évolution du coronavirus au Gabon.">

    <link rel="icon" type="image/x-icon" href="<?= asset('assets/img/logo-covid.png', 'covid'); ?>">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="<?= asset('assets/css/mobile.css', 'covid'); ?>">

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
</head>

<body>
    <header>
        <nav>
            <ul>
                <li data-url="."><i class="fas fa-globe"></i> Actualités</li>
                <li <?= ($data['active'] == 'sensibilisation') ? 'class="active"' : '' ?> data-url="<?= route('rubrique', ['r' => 'sensibilisation']) ?>"><i class="fas fa-info-circle"></i> Sensibilisation</li>
                <li <?= ($data['active'] == 'mesures-gouvernementales') ? 'class="active"' : '' ?> data-url="<?= route('rubrique', ['r' => 'mesures-gouvernementales']) ?>"><i class="fas fa-university"></i> Mesures gouvernementales</li>
                <li <?= ($data['active'] == 'points-de-presse') ? 'class="active"' : '' ?> data-url="<?= route('rubrique', ['r' => 'points-de-presse']) ?>"><i class="fas fa-newspaper"></i> Points de presse</li>
                <li <?= ($data['active'] == 'fake-news') ? 'class="active"' : '' ?> data-url="<?= route('rubrique', ['r' => 'fake-news']) ?>"><i class="fas fa-head-side-cough-slash"></i> Fake news</li>
                <li <?= ($data['active'] == 'cartes') ? 'class="active"' : '' ?> data-url="<?= route('rubrique', ['r' => 'cartes']) ?>"><i class="fas fa-map"></i> Cartes</li>
                <li <?= ($data['active'] == 'jeux') ? 'class="active"' : '' ?> data-url="<?= route('rubrique', ['r' => 'jeux']) ?>"><i class="fas fa-gamepad"></i> Jeux</li>
            </ul>
        </nav>
    </header>
    <section class="home">
        <div class="head">
            <h1 class="titre"><span>Hub média</span><span>COVID-19</span><span>by ecole 241</span></h1>
            <a class="appeler" href="tel:1410">Appeler le 1410<br>gratuitement</a>
        </div>
        <div class="statistiques">
            <div class="tabs">
                <div id="tab-one" class="tab active"><img class="mr-5" src="https://cdn.countryflags.com/thumbs/gabon/flag-400.png" height="15px" alt="Drapeau du Gabon"><span>Gabon</span></div>
                <div id="tab-two" class="tab"><img class="mr-5" src="https://static.thenounproject.com/png/661707-200.png" height="20px" alt="Image de l'Afrique"><span>Afrique</span></div>
            </div>
            <div id="tab-one-content" class="content tab-content">
                <span class="date">Mis à jour le 9 avril à 20:02</span>
                <div class="chiffres">
                    <div class="orange borders-radius-left">
                        <span><span class="nouveau">10</span> nouveaux cas</span>
                        <span class="nombre">44</span>
                        <span>Cas</span>
                    </div>
                    <div class="vert">
                        <span><span class="nouveau">0</span> nouveau cas</span>
                        <span class="nombre">1</span>
                        <span>Guéri</span>
                    </div>
                    <div class="rouge borders-radius-right">
                        <span><span class="nouveau">0</span> nouveau cas</span>
                        <span class="nombre">1</span>
                        <span>Décès</span>
                    </div>
                </div>
                <span class="source">Source : Comité de pilotage du plan de veille et de riposte contre l'épidémie à coronavirus au Gabon</a></span>
            </div>
            <div id="tab-two-content" class="content tab-content hide">
                <span class="date">Mis à jour le <?= $data['stats']['update_time'] ?></span>
                <div class="chiffres">
                    <div class="orange borders-radius-left">
                        <span><span class="nouveau"></span>&nbsp;</span>
                        <span class="nombre"><?= $data['stats']['confirmed_cases']['data'] ?></span>
                        <span>Cas confirmés</span>
                    </div>
                    <div class="rouge mx-5">
                        <span><span class="nouveau"></span>&nbsp;</span>
                        <span class="nombre"><?= $data['stats']['deaths']['data'] ?></span>
                        <span>Décès</span>
                    </div>
                    <div class="gris borders-radius-right">
                        <span><span class="nouveau"></span>&nbsp;</span>
                        <span class="nombre"><?= $data['stats']['territories']['data'] ?></span>
                        <span>Pays touchés</span>
                    </div>
                </div>
                <span class="source">Source : <a href="<?= $data['stats']['source'] ?>">Wikipedia</a></span><br><span>&nbsp;</span>
            </div>
        </div>
    </section>
    <section class="section-slider">
        <div class="slider">
            <?php foreach ($data['slider'] as $slide) : ?>
                <div class="article-slider border-none" id="<?= $slide['id'] ?>" style="background-image:url(<?= $slide['image'] ?>)">
                    <span class="vues"><?= ($slide['vues'] > 0) ? '<i class="fa fa-eye"></i> ' . $slide['vues'] : '' ?></span>
                    <div class="article-slider-titre"><?= $slide['titre'] ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="articles">
        <?php foreach ($data['articles'] as $key => $article) : ?>
            <?php if (($key + 1) % 10 == 0) : ?>
                <div class="article-fluid effet-clic" id="<?= $article['id'] ?>">
                    <div>
                        <p><?= $article['titre'] ?></p>
                        <span><?= temps_ecoule($article['pub_date']) ?></span>
                    </div>
                    <img src="<?= $article['image'] ?>" alt="<?= $article['titre'] ?>">
                    <div class="actu-footer"><span class="source"><?= $article['source_nom'] ?></span><span class="vues"><?= ($article['vues'] > 0) ? '<i class="fa fa-eye"></i> ' . $article['vues'] : '' ?></span></div>
                </div>
            <?php else : ?>
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
            <?php endif; ?>
        <?php endforeach; ?>
        <div class="article article-fluid hide">
            <div>
                <p></p>
            </div> <img src="https://gaboninfoslive.files.wordpress.com/2016/07/sans-titre-00053.png" alt="article">
        </div>
    </section>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        (function() {
            let tabs = document.querySelectorAll('.tab');
            tabs.forEach(function(tab) {
                tab.addEventListener('click', function() {
                    if (!this.className.includes('active')) {
                        switchTab(this.id)
                    }
                })
            });

            el('.article, .article-slider').forEach(function(article) {
                article.addEventListener('click', function() {
                    if (article.id) {
                        location.href = '<?php echo route('article-read', ['article' => '']) ?>' + article.id;
                    }
                })
            });

            el('nav ul li').forEach(function(rubrique) {
                rubrique.addEventListener('click', function() {
                    if (rubrique.dataset.url) {
                        location.href = rubrique.dataset.url;
                    }
                })
            });

            /* Auto play du slider*/
            $('.slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3700,
                arrows: false,
                pauseOnFocus: false,
                infinite: true
            });

            function switchTab(id) {
                let tabs = document.querySelectorAll('.tab');
                tabs.forEach(function(tab) {
                    tab.className = 'tab';
                });

                let tabsContent = document.querySelectorAll('.tab-content');
                tabsContent.forEach(function(content) {
                    content.classList.add('hide');
                });

                let target = document.querySelector('#' + id);
                let targetContent = document.querySelector('#' + id + '-content');
                target.className = 'tab active';
                if (targetContent) {
                    targetContent.classList.remove('hide');
                }
            }

            function el(seletor) {
                return document.querySelectorAll(seletor);
            }
        })();
    </script>
</body>

</html>