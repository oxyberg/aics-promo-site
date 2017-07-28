<?php

class ORM
{

    public static function getAllProfs($showInvisible = false)
    {
        $all = DB::getData('profs')['profs'];
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
        return DB::getData('profs')['counts_line'];
    }

    public static function getAllSlides()
    {
        return DB::getData('slider');
    }

    public static function getMeta()
    {
        return DB::getData('meta');
    }
}
