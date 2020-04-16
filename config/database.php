<?php
/**
 * Created by PhpStorm.
 * User: Dimitri
 * Date: 01/11/2019
 * Time: 08:12
 */

class DBINFOS
{
    private static $config_local = [
        'host' => 'localhost',
        'base' => 'covid',
        'user' => 'root',
        'pass' => ''
    ];

    private static $config_prod = [
<<<<<<< HEAD
        'host' => 'l-adresse-du-serveur',
        'base' => 'le-nom-de-la-base-de-donnees',
        'user' => 'le-nom-d-utilisateur-de-la-base-de-donnees',
        'pass' => 'mot-de-passe-de-la-base-de-donnees'
=======
        'host' => '',
        'base' => '',
        'user' => '',
        'pass' => ''
>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc
    ];

    public static function get_config()
    {
        return (is_prod() ? self::$config_prod : self::$config_local);
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 4262bd9ffaf357297df0fcfd72d0acea1285c9dc
