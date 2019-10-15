<?php


class phones
{
public static function LetterToNumber($input)
    { //Временно тут
    $replace = array('2'=>array('a','b','c'),
        '3'=>array('d','e','f'),
        '4'=>array('g','h','i'),
        '5'=>array('j','k','l'),
        '6'=>array('m','n','o'),
        '7'=>array('p','q','r','s'),
        '8'=>array('t','u','v'),
        '9'=>array('w','x','y','z'));

    }
    function phoneBlocks($number, $blocklen)
    {
        $add='';
        if (strlen($number)%2)
        {
            $add = $number[0];
            $number = substr($number, 1, strlen($number)-1);
        }
        return $add.strrev(implode("-", str_split(strrev($number), $blocklen)));
    }
}