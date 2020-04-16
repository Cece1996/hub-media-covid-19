<?php if (!defined('APP_PATH')) die('L\'accès direct à ce fichier est interdit.'); ?>
<?php
setlocale(LC_ALL, 'fr_FR');

date_default_timezone_set('Africa/Libreville');

/*
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
*/

require_once 'utils.php';
require_once 'config/database.php';
require_once 'db.php';