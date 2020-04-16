<?php

function home()
{
    $labels = array(
        'name' => 'Nom',
        'author' => 'Prestataire',
        'owner' => 'Propriétaire',
        'website' => 'Site web',
        'email' => 'Adresse e-mail',
        'theme' => 'Thème',
        'logo' => 'Logo de l\'application',
        'root_url' => 'URL de développement',
        'prod_url' => 'URL de production',
        'home_route' => 'Route de la page par défaut',
        
        'icon' => 'Icône associée',
        'dir' => 'Dossier',
        'title' => 'Titre de la rubrique',
        'singular' => 'Orthographe au singulier',
        'plural' => 'Orthographe au pluriel',
        'table' => 'Table correspondante dans la base de données',
        'route' => 'Route principale',
        'route-add' => 'Route pour la création',
        'male' => 'Genre',
        'show' => 'Afficher dans le menu latéral',
        'deny' => 'Bloquer l\'accès',
    );
    load_view('index', $labels);
}

function save_general()
{
    requiere_post();

    $app = get_config();

    foreach ($_POST as $key => $info) {
        if ($_POST[$key] != $app[$key]) {
            echo '<pre>';
            var_dump($key, $info, $app[$key], ($_POST[$key] != $app[$key]));
            echo '</pre>';
            $app[$key] = $_POST[$key];
        }
    }

    $json = json_encode($app, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

    $filename = realpath(__DIR__) . '/../../config/app.json';

    if (!is_writable(realpath(__DIR__))) {
        flash('Problème de droit en écriture dans le dossier <b>heading/setup</b>', 'error');
    } else if (file_put_contents($filename, $json)) {
        flash('Informations enregistrées avec succès');
    }
    redirect('home');
}

function save_heading()
{
    requiere_post();

    $heading = get_heading($_POST['name']);

    $modif = false;

    foreach ($_POST as $key => $info) {
        if ($_POST[$key] != $heading[$key]) {
            echo '<pre>';
            var_dump($key, $info, $heading[$key], ($_POST[$key] != $heading[$key]));
            echo '</pre>';
            $heading[$key] = $_POST[$key];
            $modif = true;
        }
    }

    if ($modif) {
        $app = get_config();

        $app['headings'][get_heading($_POST['name'], true)] = $heading;

        $json = json_encode($app, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    
        //dump($json);

        $filename = realpath(__DIR__) . '/../../config/app.json';

        if (!is_writable(realpath(__DIR__))) {
            flash('Problème de droit en écriture dans le dossier <b>heading/setup</b>', 'error');
        } else if (file_put_contents($filename, $json)) {
            flash('Informations enregistrées avec succès');
        }
    } else {
        flash('Aucune information modifiée');
    }

    redirect('home');
}
