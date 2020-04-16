<<<<<<< HEAD
<!DOCTYPE html>
=======
>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUB MÉDIA - COVID-19</title>

<<<<<<< HEAD
    <meta name="theme-color" content="#030946">

    <meta name="author" content="Ecole 241">
    <meta name="description" content="HUB MÉDIA - COVID-19, est une plateforme de centralisation des informations autour du COVID-19 permettant de suivre l'évolution du coronavirus au Gabon.">
    <meta name="keywords" content="HUB MÉDIA, COVID-19, COVID-19 Infos, Coronavirus, Coronavirus Gabon, Ecole 241, OkaCode, Infos coronavirus, Alert coronavirus, en direct coronavirus, covid19, gabon actualité covid19, gabon recommandation mesures covid19">

    <meta name="og:title" content="HUB MÉDIA - COVID-19">
    <meta name="og:type" content="website">
    <meta name="og:image" content="<?= asset('assets/img/logo-covid.png', 'covid'); ?>" />
    <meta name="og:url" content="<?= root_url(); ?>" />
    <meta name="og:site_name" content="HUB MÉDIA - COVID-19">
    <meta name="og:description" content="HUB MÉDIA - COVID-19, est une plateforme de centralisation des informations autour du COVID-19 permettant de suivre l'évolution du coronavirus au Gabon.">
=======
    <link rel='manifest' href='manifest.json'>

    <meta name="theme-color" content="#030946">

    <meta name="author" content="Ecole 241">
    <meta name="description"
          content="HUB MÉDIA - COVID-19, est une platefrome de centralisation des informations autour du COVID-19 permettant de suivre l'évolution du coronavirus au Gabon.">
    <meta name="keywords"
          content="HUB MÉDIA, COVID-19, COVID-19 Infos, Coronavirus, Coronavirus Gabon, Ecole 241, OkaCode, Infos coronavirus, Alert coronavirus, en direct coronavirus, covid19, gabon actualité covid19, gabon recommandation mesures covid19">

    <meta name="og:title" content="HUB MÉDIA - COVID-19">
    <meta name="og:type" content="website">
    <meta name="og:image" content="<?= asset('assets/img/logo-covid.png', 'covid'); ?>"/>
    <meta name="og:url" content="<?= root_url(); ?>"/>
    <meta name="og:site_name" content="HUB MÉDIA - COVID-19">
    <meta name="og:description"
          content="HUB MÉDIA - COVID-19, est une platefrome de centralisation des informations autour du COVID-19 permettant de suivre l'évolution du coronavirus au Gabon.">
>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc

    <link rel="icon" type="image/x-icon" href="<?= asset('assets/img/logo-covid.png', 'covid'); ?>">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
<<<<<<< HEAD

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

=======
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc
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
<<<<<<< HEAD

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
            <ul>
                <li <?= ($data['active'] == '') ? 'class="active"' : '' ?> data-url="."><i class="fas fa-globe"></i> Actualités</li>
                <li <?= ($data['active'] == 'sensibilisation') ? 'class="active"' : '' ?> data-url="<?= route('home', ['r' => 'sensibilisation']) ?>"><i class="fas fa-info-circle"></i> Sensibilisation</li>
                <li <?= ($data['active'] == 'mesures-gouvernementales') ? 'class="active"' : '' ?> data-url="<?= route('home', ['r' => 'mesures-gouvernementales']) ?>"><i class="fas fa-university"></i> Mesures gouvernementales</li>
                <li <?= ($data['active'] == 'points-de-presse') ? 'class="active"' : '' ?> data-url="<?= route('home', ['r' => 'points-de-presse']) ?>"><i class="fas fa-newspaper"></i> Points de presse</li>
                <li <?= ($data['active'] == 'fake-news') ? 'class="active"' : '' ?> data-url="<?= route('home', ['r' => 'fake-news']) ?>"><i class="fas fa-head-side-cough-slash"></i> Fake news</li>
                <li <?= ($data['active'] == 'cartes') ? 'class="active"' : '' ?> data-url="<?= route('home', ['r' => 'cartes']) ?>"><i class="fas fa-map"></i> Cartes</li>
                <li class="hide <?= ($data['active'] == 'jeux') ? 'active' : '' ?>" data-url="<?= route('home', ['r' => 'jeux']) ?>"><i class="fas fa-gamepad"></i> Jeux</li>
=======
</head>

<body>
    <header>
        <nav>
            <ul>
                <li class="active" data-url="."><i class="fas fa-globe"></i> Actualités</li>
                <li><i class="fas fa-info-circle"></i> Sensibilisation</li>
                <li><i class="fas fa-university"></i> Mesures gouvernementales</li>
                <li><i class="fas fa-newspaper"></i> Points de presse</li>
                <li><i class="fas fa-head-side-cough-slash"></i> Fake news</li>
                <li><i class="fas fa-map"></i> Cartes</li>
                <li><i class="fas fa-gamepad"></i> Jeux</li>
>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc
            </ul>
        </nav>
    </header>
    <section class="home">
        <div class="head">
<<<<<<< HEAD
            <h1 class="titre"><span>Hub média</span><span>COVID-19</span><span>by ecole 241</span></h1>
            <a class="appeler effet-clic" href="tel:1410">Appeler le 1410<br>gratuitement</a>
=======
            <h1 class="titre"><span>Hub média</span><span>COVID-19</span></h1>
            <a class="appeler" href="tel:1410">Appeler le 1410<br>gratuitement</a>
>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc
        </div>
        <div class="statistiques">
            <div class="tabs">
                <div id="tab-one" class="tab active"><img class="mr-5" src="https://cdn.countryflags.com/thumbs/gabon/flag-400.png" height="15px" alt="Drapeau du Gabon"><span>Gabon</span></div>
                <div id="tab-two" class="tab"><img class="mr-5" src="https://static.thenounproject.com/png/661707-200.png" height="20px" alt="Image de l'Afrique"><span>Afrique</span></div>
            </div>
            <div id="tab-one-content" class="content tab-content">
<<<<<<< HEAD
                <span class="date">Mis à jour le <?= $data['stats']['maj_date'] ?></span>
                <div class="chiffres">
                    <div class="orange borders-radius-left">
                        <span><span class="nouveau"><?= $data['stats']['prog_positifs'] ?></span> nouveau<?= ($data['stats']['prog_positifs'] > 1) ? 'x' : '' ?> cas</span>
                        <span class="nombre"><?= $data['stats']['positifs'] ?></span>
                        <span>Cas</span>
                    </div>
                    <div class="vert">
                        <span><span class="nouveau"><?= $data['stats']['prog_guerisons'] ?></span> nouveau<?= ($data['stats']['prog_guerisons'] > 1) ? 'x' : '' ?> cas</span>
                        <span class="nombre"><?= $data['stats']['guerisons'] ?></span>
                        <span>Guéri<?= ($data['stats']['guerisons'] > 1) ? 's' : '' ?></span>
                    </div>
                    <div class="rouge borders-radius-right">
                        <span><span class="nouveau"><?= $data['stats']['prog_deces'] ?></span> nouveau<?= ($data['stats']['prog_deces'] > 1) ? 'x' : '' ?> cas</span>
                        <span class="nombre"><?= $data['stats']['deces'] ?></span>
                        <span>Décès</span>
                    </div>
                </div>
                <span class="source">Source : Comité de pilotage du plan de veille et de riposte contre la pandémie à coronavirus au Gabon</a></span>
            </div>
            <div id="tab-two-content" class="content tab-content hide">
                <span class="date" id="update_time"><i>En cours de chargement ...</i></span>
                <div class="chiffres">
                    <div class="orange borders-radius-left">
                        <span><span class="nouveau"></span>&nbsp;</span>
                        <span class="nombre" id="confirmed_cases">--</span>
                        <span>Cas confirmés</span>
                    </div>
                    <div class="rouge mx-5">
                        <span><span class="nouveau"></span>&nbsp;</span>
                        <span class="nombre" id="deaths">--</span>
                        <span>Décès</span>
                    </div>
                    <div class="gris borders-radius-right">
                        <span><span class="nouveau"></span>&nbsp;</span>
                        <span class="nombre" id="territories">--</span>
                        <span>Territoires</span>
                    </div>
                </div>
                <span class="source">Source : <a href="#" id="source">Données provenant de la page 2020 coronavirus pandemic in Africa - Wikipedia</a></span>
=======
                <span class="date">Mis à jour le 5 avril à 20:00</span>
                <div class="chiffres">
                    <div class="orange borders-radius-left">
                        <span><span class="nouveau">3</span> nouveaux cas</span>
                        <span class="nombre">24</span>
                        <span>Cas</span>
                    </div>
                    <div class="vert">
                        <span><span class="nouveau">0</span> nouveau cas</span>
                        <span class="nombre">1</span>
                        <span>Guéri</span>
                    </div>
                    <div class="rouge borders-radius-right">
                        <span><span class="nouveau">0</span> nouveaux cas</span>
                        <span class="nombre">1</span>
                        <span>Décès</span>
                    </div>
                </div>
            </div>
            <div id="tab-two-content" class="content tab-content hide">
                <span class="date">Mis à jour le 4 avril à 19:18</span>
                <div class="chiffres">
                    <div class="orange borders-radius-left">
                        <span><span class="nouveau">--</span> nouveaux cas</span>
                        <span class="nombre">1.056.159</span>
                        <span>Cas confirmés</span>
                    </div>
                    <div class="rouge mx-5">
                        <span><span class="nouveau">--</span> nouveaux cas</span>
                        <span class="nombre">57.206</span>
                        <span>Décès</span>
                    </div>
                    <div class="gris borders-radius-right">
                        <span><span class="nouveau">0</span> nouveau pays</span>
                        <span class="nombre">208</span>
                        <span>Pays</span>
                    </div>
                </div>
>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc
            </div>
        </div>
    </section>
    <section class="section-slider">
<<<<<<< HEAD
        <div class="slider swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ($data['slider'] as $slide) : ?>
                    <div class="article-slider swiper-slide border-none" id="<?= $slide['id'] ?>" style="background-image:url(<?= $slide['image'] ?>)">
                        <span class="vues"><?= ($slide['vues'] > 0) ? '<i class="fa fa-eye"></i> ' . $slide['vues'] : '' ?></span>
                        <div class="article-slider-titre"><?= $slide['titre'] ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
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
            </div> <img src="https://gaboninfoslive.files.wordpress.com/2016/07/sans-titre-00053.png" alt="publicite">
        </div>
    </section>
    <?php if (!is_prod()) : ?>
        <section class="articles">
            <div class="article effet-clic" id="36">
                <div class="image" style="background-image:url(https://fnh.ma//uploads/actualites/5e8b71664584c.jpg)"></div>
                <div class="infos">
                    <div class="content">
                        <div class="top">
                            <span><?= date('H:i', strtotime('2020-03-08 16:55')) ?></span><span class="vues"><i class="fa fa-eye"></i> 18</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quo, incidunt tenetur, possimus autem optio aliquid, eos illo cumque pariatur animi in. Nostrum cumque cum qui neque, impedit esse tenetur.</p>
                        <div class="actu-footer"><span class="source">France info</span></div>
                    </div>
                </div>
            </div>
            <div class="article effet-clic" id="34">
                <div class="image" style="background-image:url(https://www.radiolac.ch/wp-content/uploads/2020/03/nbx1041.jpg)"></div>
                <div class="infos">
                    <div class="content">
                        <span>publié <?= temps_ecoule('2020-02-07 17:01') ?></span>
                        <p>+3 nouveaux cas detectés au Gabon </p>
                        <div class="actu-footer"><span class="source">Gabon Actu</span><span class="vues"><i class="fa fa-eye"></i> 21</span></div>
                    </div>
                </div>
            </div>
            <div class="article effet-clic" id="31">
                <div class="image" style="background-image:url(https://i0.wp.com/directinfosgabon.com/wp-content/uploads/2020/03/Sylvia-Bongo-Ondimba.jpg?fit=850%2C565&ssl=1)"></div>
                <div class="infos">
                    <div class="content">
                        <span>Il y 3 minutes</span>
                        <p>450 millions de FCFA offert par la 1ere Dame pour les plus ...</p>
                        <div class="actu-footer"><span class="source">Gabonreview</span><span class="vues"><i class="fa fa-eye"></i> 14</span></div>
                    </div>
                </div>
            </div>
            <div class="article effet-clic" id="30">
                <div class="image" style="background-image:url(https://www.jeuneafrique.com/medias/2020/03/03/coronavirus_fake_news_1000-592x296-1583255443.jpg)"></div>
                <div class="infos">
                    <div class="content">
                        <span>Il y 3 minutes</span>
                        <p>Le coronavirus et les moustiques</p>
                        <div class="actu-footer"><span class="source">Jeune Afrique</span><span class="vues"><i class="fa fa-eye"></i> 8</span></div>
                    </div>
                </div>
            </div>
            <div class="article effet-clic" id="29">
                <div class="image" style="background-image:url(https://www.journaldusenegal.com/wp-content/uploads/2019/03/15525786068922-780x440.jpg)"></div>
                <div class="infos">
                    <div class="content">
                        <span>Il y 3 minutes</span>
                        <p>Mesure de gratuité des loyers : La Cour constitutionnelle �...</p>
                        <div class="actu-footer"><span class="source">directinfosgabon</span><span class="vues"><i class="fa fa-eye"></i> 9</span></div>
                    </div>
                </div>
            </div>
            <div class="article effet-clic" id="28">
                <div class="image" style="background-image:url(https://lh3.googleusercontent.com/proxy/G6fwtMTGdH3rENY0KXVFUbBTpHH6lQZAh4lbn6hIQQStQSLwt2TgvTZe27oABMKsFsGKMV16wTXvpKluYd2A2LEmaB0C5c1H5JgynMdwEu06UZ77hOMAoj0XX4d7XDrA4DyoLIYBHoxG)"></div>
                <div class="infos">
                    <div class="content">
                        <span>Il y 3 minutes</span>
                        <p>Gabriel Tchango en guerre contre la propagation du virus</p>
                        <div class="actu-footer"><span class="source">Gabon-info</span><span class="vues"><i class="fa fa-eye"></i> 6</span></div>
                    </div>
                </div>
            </div>
            <div class="article-fluid effet-clic" id="21">
                <div>
                    <p>Ali Bongo annonce une enveloppe de 225 milliards pour aider les entreprises</p>
                    <span>Il y 3 minutes</span>
                </div>
                <img src="https://www.jeuneafrique.com/medias/2020/04/03/jad20200403-conf-alibongo-592x296-1585927890.jpg" alt="Ali Bongo annonce une enveloppe de 225 milliards pour aider les entreprises">
                <div class="actu-footer"><span class="source">Gabon Media Time</span><span class="vues"><i class="fa fa-eye"></i> 3</span></div>
            </div>
            <div class="article" id="20">
                <div class="image" style="background-image:url(https://img-3.journaldesfemmes.fr/06KdkAko8BvngRmS23h4BEa_Ng8=/1240x/smart/9c54d3bd4d3f4da199e4923b40b39202/ccmcms-jdf/14662261.jpg)"></div>
                <div>
                    <p>Covid-19 : le Gabon teste l’hydroxychloroquine et l’azit...</p>
                    <div class="actu-footer"><span class="source">Gabonactu.com</span><span class="vues"><i class="fa fa-eye"></i> 4</span></div>
                </div>
            </div>
            <div class="article" id="19">
                <div class="image" style="background-image:url(https://afrique.lalibre.be/app/uploads/2020/03/1024x538_1036859-690x450.jpg)"></div>
                <div>
                    <p>Création de 60 centres de test au Covid-19 sur l’ensemble...</p>
                    <div class="actu-footer"><span class="source">Gabon Media Time</span><span class="vues"><i class="fa fa-eye"></i> 9</span></div>
                </div>
            </div>
            <div class="article" id="18">
                <div class="image" style="background-image:url(https://s.rfi.fr/media/display/969c1002-10b4-11ea-950c-005056a99247/w:1240/p:16x9/000_par7346885_0.webp )"></div>
                <div>
                    <p>Le Gabon pourrait enregistrer 39.934 cas d’hospitalisation</p>
                    <div class="actu-footer"><span class="source">GABON Review</span><span class="vues"><i class="fa fa-eye"></i> 7</span></div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <!-- Initialize Swiper -->
    <script>

    </script>
    <script>
        (function() {
            getAfricanStats();

=======
        <div class="slider">
            <?php foreach ($data['slider'] as $slide) : ?>
                <div class="article-slider border-none" id="<?= $slide['id'] ?>">
                    <span class="vues"><?= ($slide['vues'] > 0) ? '<i class="fa fa-eye"></i> ' . $slide['vues'] : '' ?></span>
                    <img src="<?= $slide['image'] ?>" alt="<?= $slide['titre'] ?>">
                    <div class="article-slider-titre"><?= $slide['titre'] ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="articles">
        <?php foreach ($data['articles'] as $article) : ?>
            <div class="article" id="<?= $article['id'] ?>">
                <div>
                    <p><?= $article['titre'] ?></p>
                    <div class="actu-footer"><span class="source"><?= $article['source_nom'] ?></span><span class="vues"><?= ($article['vues'] > 0) ? '<i class="fa fa-eye"></i> ' . $article['vues'] : '' ?></span></div>
                </div>
                <img src="<?= $article['image'] ?>" alt="article">
            </div>
        <?php endforeach; ?>
        <div class="article article-fluid hide">
            <div>
                <p>Coronavirus: gratuité de l'eau et de l'électricité pour 3 mois</p>
            </div>
            <img src="<?= theme_url('covid'); ?>assets/img/actu.jpeg" alt="article">
            <div class="actu-footer"><span class="source">Medisite</span><span class="vues"><i class="fa fa-eye"></i> 526</span></div>
        </div>
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
>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc
            let tabs = document.querySelectorAll('.tab');
            tabs.forEach(function(tab) {
                tab.addEventListener('click', function() {
                    if (!this.className.includes('active')) {
                        switchTab(this.id)
                    }
                })
            });

<<<<<<< HEAD
            els('.article, .article-slider, .article-fluid').forEach(function(article) {
=======
            el('.article, .article-slider').forEach(function(article) {
>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc
                article.addEventListener('click', function() {
                    if (article.id) {
                        location.href = '<?php echo route('article-read', ['article' => '']) ?>' + article.id;
                    }
                })
            });

<<<<<<< HEAD
            els('nav ul li').forEach(function(rubrique) {
                rubrique.addEventListener('click', function() {
                    if (rubrique.dataset.url) {
                        location.href = rubrique.dataset.url;
                    }
                })
            });

            els('share ul li').forEach(function(rubrique) {
=======
            el('nav ul li').forEach(function(rubrique) {
>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc
                rubrique.addEventListener('click', function() {
                    if (rubrique.dataset.url) {
                        location.href = rubrique.dataset.url;
                    }
                })
            });

            /* Auto play du slider*/
<<<<<<< HEAD
            let swiper = new Swiper('.swiper-container', {
                centeredSlides: true,
                loop: true,
                autoplay: {
                    delay: 3700,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });

            getUserToken();

=======
            $('.slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3700,
                arrows: false,
                pauseOnFocus: false,
                infinite: true
            });

>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc
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

<<<<<<< HEAD
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
                var userToken = getCookie("userToken");
                if (userToken != "") {
                    //alert("Welcome again " + userToken);
                } else {
                    let d = new Date();
                    userToken = d.getTime();
                    setCookie("userToken", userToken, 365);
                }
            }

            function getAfricanStats() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        let stats = JSON.parse(this.responseText);
                        el('#update_time').textContent = 'Date de mise à jour : ' + stats.update_time + ' (UTC)';
                        el('#confirmed_cases').textContent = stats.confirmed_cases.data;
                        el('#deaths').textContent = stats.deaths.data;
                        el('#territories').textContent = stats.territories.data;
                        el('#source').href = stats.source;
                    }
                };
                xhttp.open("GET", "?article-stats", true);
                xhttp.send();
=======
            function el(seletor) {
                return document.querySelectorAll(seletor);
>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc
            }
        })();
    </script>
</body>

<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc
