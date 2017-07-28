<?php

class DB
{
    private static $data = [];

    public static function load($paths)
    {
        foreach ($paths as $alias => $file)
        {
            $contents = file_get_contents($file);
            self::$data[$alias] = json_decode($contents, true);
        }
    }

    public static function getData($alias)
    {
        if (isset(self::$data[$alias])) return self::$data[$alias];
    }
}
