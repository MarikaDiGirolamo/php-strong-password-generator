<?php
function generatePassword($length)
{
    $result = "";

    $lowerchars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = strtoupper($lowerchars);
    $numbers = '0123456789';
    $symbol = '!@#$%^&*()_-=+;:,.?';

    $allowedChar = $lowerchars . $uppercase . $numbers . $symbol;
    $charsNumber = strlen($allowedChar);


    for ($i = 0; $i < $length; $i++) {

        $randomNum = rand(0, $charsNumber - 1);
        $currentChar = $allowedChar[$randomNum];
        $result .= $currentChar;
    }

    return $result;
}
