<?php

define('DEBUG', true);
define('PATH_TO_DB', dirname(__FILE__) . '/db');
define('PATH_TO_PROFS', PATH_TO_DB . '/profs.json');
define('PATH_TO_SLIDER', PATH_TO_DB . '/slider.json');

if (DEBUG)
{
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}

class ORM
{

    public static function getAllProfs($showInvisible = false)
    {
        $file = file_get_contents(PATH_TO_PROFS);
        $all = json_decode($file, true)['profs'];
        if ($showInvisible == false)
        {
            $i = 0;
            foreach ($all as $prof)
            {
                if ($prof['visible'] == 0)
                {
                    unset($all[$i]);
                    $i--;
                }
                $i++;
            }
        }
        return $all;
    }

    public static function getProfsByRoom($room, $showInvisible = false)
    {
        $all = self::getAllProfs();
        $result = [];
        foreach ($all as $prof)
        {
            if (($prof['room'] == $room) && ($showInvisible || $prof['visible'] == 1))
            {
                $result[] = $prof;
            }
        }
        return $result;
    }

    public static function getProfCount()
    {
        $file = file_get_contents(PATH_TO_PROFS);
        $all = json_decode($file, true);
        return $all['counts_line'];
    }

    public static function getAllSlides()
    {
        $file = file_get_contents(PATH_TO_SLIDER);
        return json_decode($file, true);
    }
}

echo '<pre>';
print_r(ORM::getProfsByRoom('112a'));
echo '</pre>';

require 'template.php';
