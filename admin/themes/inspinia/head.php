<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= heading('title') ? heading('title') : 'Administration' ?> | <?= $app['name']; ?></title>

    <link rel="icon" type="image/x-icon" href="<?= asset('img/logo.png'); ?>">

    <link href="<?= asset('css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= asset('font-awesome/css/font-awesome.css'); ?>" rel="stylesheet">

    <link href="<?= asset('css/animate.css'); ?>" rel="stylesheet">
    <link href="<?= asset('css/style.css'); ?>" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="<?= asset('css/plugins/toastr/toastr.min.css'); ?>" rel="stylesheet">

</head>

<body class="no-skin-config">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element text-center">
                            <img alt="image" class="rounded-circle" width="80%" src="<?= asset('img/logo.png'); ?>" />
                            <span class="block m-t-xs font-bold text-white"><?= session('n'); ?></span>
                        </div>
                        <div class="logo-element">
                            HUB
                        </div>
                    </li>
                    <?php foreach ($app['headings'] as $heading) : ?>
                        <?php if (isset($heading['show']) and !$heading['show']) continue; ?>
                        <?php if (!has_right($heading)) continue; ?>
                        <li<?= ($heading['name'] == heading('name')) ? ' class="active"' : '' ?>>
                            <a href="?<?= $heading['route'] ?>"><i class="fa fa-<?= $heading['icon'] ?>"></i> <span class="nav-label"><?= $heading['title'] ?></span></a>
                            </li>
                        <?php endforeach; ?>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Bienvenue dans la zone d'administation de <b><?= $app['name']; ?></b></span>
                        </li>
                        <li>
                            <a href="<?= route('logout', [], 'user') ?>" class="text-danger">
                                <i class="fa fa-sign-out"></i> Déconnexion
                            </a>
                        </li>
                        <?php if (session('p') == 99) : ?>
                            <li>
                                <a href="<?= (is_prod() ? $app['root_url'] : $app['prod_url']) ?>">
                                    <i class="fa fa-arrow-<?= is_prod() ? 'left' : 'right' ?>"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>

                </nav>
            </div>