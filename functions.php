<?php 
 //creo funzione per dare un paramentro di validità alla pwd per lunghezza

function random_pwd($currentPwd)
{
    $chars = ('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?');

    if (strlen($currentPwd) >= 5 && strlen($currentPwd) <= 12 && str_contains($currentPwd, $chars)) {
        echo 'valida';
    } else {
        echo 'non valida';
    }
}
