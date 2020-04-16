<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $app['name']; ?> | Connexion</title>

    <link href="<?= asset('css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= asset('font-awesome/css/font-awesome.css'); ?>" rel="stylesheet">

    <link href="<?= asset('css/animate.css'); ?>" rel="stylesheet">
    <link href="<?= asset('css/style.css'); ?>" rel="stylesheet">

    <style>
        body {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            background-image: url(https://images.unsplash.com/photo-1550254804-6e669a63fc1c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80);
            background-size: cover
        }

        .loginColumns {
            background-color: #fff;
            padding: 40px;
        }
    </style>

    <!-- Toastr style -->
    <link href="<?= theme_url(); ?>css/plugins/toastr/toastr.min.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">
            <div class="col-md-6 offset-6">
                <div class="ibox-heading text-center my-3" style="background-color: transparent">
                    <img src="<?= asset('img/logo.png') ?>" alt="Logo de Under Writing" height="128px">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2 class="font-bold">Bienvenue sur <?= $app['name']; ?></h2>
                <p>
                    <strong><?= $app['name']; ?></strong> est une plateforme de <?= $app['description']; ?>.
                </p>
            </div>
            <div class="col-md-6">
                <div>
                    <form class="m-t" role="form" method="post" action="<?= route('verify'); ?>">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Adresse e-mail" required="" value="<?= @_e($_SESSION['email']) ?>">
                        </div>
                        <div class="form-group">
                            <input type="password" name="pass" class="form-control" placeholder="Mot de passe" required="">
                        </div>
                        <button type="submit" name="user-verify" class="btn btn-primary block full-width m-b">Connexion</button>
                    </form>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-6">
                Copyright © <?= $app['owner']; ?>
            </div>
            <div class="col-md-6 text-right">
                <small><?= date('Y') ?></small>
            </div>
        </div>
    </div>

    <script src="<?= theme_url(); ?>js/jquery-3.1.1.min.js"></script>

    <!-- Toastr -->
    <script src="<?= asset('js/plugins/toastr/toastr.min.js'); ?>"></script>

    <?php $flash = get_flash(); ?>
    <?php if ($flash) : ?>
        <script>
            $(document).ready(function() {
                setTimeout(function() {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 8 * 1000
                    };
                    <?php if ($flash['type'] == 'success') : ?>
                        toastr.success("<?= $flash['message']; ?>", 'Opération réussie');
                    <?php elseif ($flash['type'] == 'error') : ?>
                        toastr.error("<?= $flash['message']; ?>", 'Opération échouée');
                    <?php endif; ?>
                }, 1300);
            });
        </script>
    <?php endif; ?>


</body>

</html>