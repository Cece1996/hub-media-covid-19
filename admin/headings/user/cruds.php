<?php

function home()
{
    trace('Listing des utilisateurs par ' . session('n'));
    load_view('index', get_data());
}

function edit()
{
    $params = array(
        'id' => $_GET['id'],
    );

    $user = one(heading('table'), $params);

    if ($user) {
        trace('Affichage des détails de l\'utilsateur ' . '<a href="' . route('user-edit', ['id' => $user['id']]) . '">' . $user['name'] . '</a> par ' . session('n'));
        load_view('edit', $user);
    } else {
        redirect('user-home');
    }
}

function add()
{
    load_view('add');
}

function login()
{
    load_page('login');
}

function logout()
{
    trace('Déconnexion de ' . session('n'));
    $_SESSION = [];
    redirect('user-login');
}

function verify()
{
    requiere_post();

    $params = array(
        'email' => $_POST['email'],
        'pass' => md5($_POST['pass'])
    );

    $user = one(heading('table'), $params);

    if ($user) {
        $_SESSION['e'] = $user['email'];
        $_SESSION['n'] = $user['name'];
        $_SESSION['p'] = $user['profile'];
        $_SESSION['session_token'] = md5(uniqid(time()));

        if ($_SESSION['email']) unset($_SESSION['email']);
        trace('Connexion de ' . $user['name'] . ' (IP : ' . $_SERVER["REMOTE_ADDR"] . ')');
        redirect('publication-home');
    }

    trace('Tentative de connexion échouée. e-amil : ' . $_POST['email']);
    $_SESSION['email'] = $_POST['email'];
    flash('Vérifier votre adresse e-mail ou votre mot de passe et réessayez', 'error');
    redirect('user-login');
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
                if ($user['email'] == $_SESSION['e']) {
                    $_SESSION['n'] = $_POST['name'];
                    $_SESSION['p'] = $_POST['profile'];
                }
                trace('Les informations de ' . '<a href="' . route('user-edit', ['id' => $user['id']]) . '">' . $user['name'] . '</a> ont été modifiées par ' . session('n'));
                flash('Les informations de ' . $user['name'] . ' ont été bien modifiées');
                redirect('user-home');
            } else redirect('user-edit', ['id' => $user['id']]);
        }
    } else {

        $_POST['pass'] = md5($_POST['pass']);

        $params = array(
            'email' => $_POST['email']
        );

        $user = one(heading('table'), $params);

        if ($user) {
            flash("Un utilisateur avec cette adresse e-mail existe déjà", 'error');
            redirect('user-add');
        }

        $new_user = e(heading('table'), $_POST);

        if ($new_user) {
            redirect('user-home');
        } else {
            flash(l('return'), 'error');
            redirect('user-add');
        }
    }
}

function delete()
{

    $params = array(
        'id' => $_GET['id'],
    );

    $user = one(heading('table'), $params);

    if ($user) {
        if (d(heading('table'), $params)) {
            flash("L'utilisateur {$user['name']} a bien été supprimé");
        } else {
            flash(l('return'), 'error');
        }
    } else {
        flash(l('return'), 'error');
    }

    redirect('user-home');
}
