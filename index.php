<?php

define('DEBUG', true);
define('PATH_TO_DB', dirname(__FILE__) . '/db');
define('PATH_TO_META', PATH_TO_DB . '/meta.json');
define('PATH_TO_PROFS', PATH_TO_DB . '/profs.json');
define('PATH_TO_SLIDER', PATH_TO_DB . '/slider.json');

mb_internal_encoding('UTF-8');

if (DEBUG)
{
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}

require 'helpers.php';
require 'db.php';
require 'orm.php';

DB::load([
    'meta' => PATH_TO_META,
    'slider' => PATH_TO_SLIDER,
    'profs' => PATH_TO_PROFS,
]);

require 'template.php';
