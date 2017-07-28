<?php

function dd($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
    die;
}

function getShrinkedName($prof)
{
    return $prof['last_name'] . ' ' . mb_substr($prof['name'], 0, 1) . '. ' . mb_substr($prof['second_name'], 0, 1) . '.';
}
