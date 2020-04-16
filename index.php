<?php
session_start();

date_default_timezone_set('Africa/Libreville');

/*
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
*/

require_once 'core/load.php';

if (isset($_GET)) {

    $handler = get_path();

    if ($handler) {
        $handler();
    } else {
        require_once 'themes/' . get('theme') . '/404.php';
    }
}
