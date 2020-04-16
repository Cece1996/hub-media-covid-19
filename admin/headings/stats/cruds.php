<?php

function home()
{
    trace('Listing des statistiques par ' . session('n'));
    push_data();
}

function add()
{
    load_view('add');
}

function edit()
{
    $params = array(
        'id' => $_GET['id'],
    );

    $stat = one(heading('table'), $params);

    if ($stat) {
        trace('Affichage des détails d\'une <a href="' . route('stats-edit', ['id' => $stat['id']]) . '">statistique</a>' . ' par ' . session('n'));
        load_view('edit', $stat);
    } else {
        redirect('home');
    }
}

function save()
{
    requiere_post();

    if (isset($_POST['id'])) {

        $params = array(
            'id' => $_POST['id']
        );
        $stat = one(heading('table'), $params);

        if ($stat) {
            $res = e(heading('table'), $_POST, $stat['id']);
            if ($res) {
                trace('Modification des informations d\'une <a href="' . route('stats-edit', ['id' => $stat['id']]) . '">statistique</a>' . ' par ' . session('n'));
                flash('Les informations ont été bien modifiées');
                redirect('stats-home');
            } else {
                trace('Une erreur s\'est produite lors de la modification d\'une <a href="' . route('stats-edit', ['id' => $stat['id']]) . '">statistique</a>' . ' par ' . session('n'));
                flash('Une erreur s\'est produite lors de la modification de la statistique', 'error');
                redirect('stats-edit', ['id' => $stat['id']]);
            }
        } else {
            trace('Une statistique demandée par ' . session('n') . ' est introuvable');
            flash('La statistique demandée est introuvable', 'error');
            redirect('home');
        }
    } else {

        $stat = e(heading('table'), $_POST);

        if ($stat) {
            trace('Enregistrement d\'une statistique par ' . session('n') . '. <a href="' . route('stats-edit', ['id' => $stat['id']]) . '">Détails</a>');
            flash('La statistique a bien été enregistrée');
            redirect('stats-home');
        } else {
            trace('Une erreur s\'est produite lors de la création d\'une statitique par ' . session('n'));
            flash(l('return'), 'error');
            redirect('stats-add');
        }
    }
}

function delete()
{

    $params = array(
        'id' => $_GET['id'],
    );

    $item = one(heading('table'), $params);

    if ($item) {
        if (d(heading('table'), $params)) {
            flash("La statistique du {$item['maj_date']} a bien été supprimée");
        } else {
            flash(l('return'), 'error');
        }
    } else {
        flash(l('return'), 'error');
    }

    redirect('stats-home');
}
