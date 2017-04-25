<?php
function genpass()
{
    $sletters = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l',
        'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'v', 'x', 'y', 'z');
    $bletters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L',
        'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V', 'X', 'Y', 'Z');
    $symbols = array('.', ',', '(', ')', '[', ']', '!', '?', '&', '^', '%',
        '@', '*', '$', '<', '>', '/', '|', '+', '-', '{', '}', '`', '~');
    $digits = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');

    $pass = "";
 
    for ($i = 0; $i < 2; $i++) {
        $index = rand(0, count($bletters) - 1);
        $pass .= $bletters[$index];
        $index = rand(0, count($digits) - 1);
        $pass .= $digits[$index];
        $index = rand(0, count($symbols) - 1);
        $pass .= $symbols[$index];
    }
    for ($i = 0; $i < 3; $i++) {
        $index = rand(0, count($sletters) - 1);
        $pass .= $sletters[$index];
    }

    return str_shuffle($pass);
}

echo genpass();