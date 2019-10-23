<?php

include('login.php');

function addPreke($name, $price, $amount, $descr, $position) {
    $name = htmlspecialchars(trim($name), ENT_QUOTES);
    $price = htmlspecialchars(trim($price), ENT_QUOTES);
    $amount = htmlspecialchars(trim($amount), ENT_QUOTES);
    $descr = htmlspecialchars(trim($descr), ENT_QUOTES);
    $position = htmlspecialchars(trim($position), ENT_QUOTES);

    $add = "INSERT INTO prekes VALUES (NULL, '$name', '$price', '$amount', '$descr', '$position')";
    $cr = mysqli_query(getConnection(), $add);
    if(!$cr) {
        echo "error: nepavyko sukurti prekės" .mysql_error(getConnection()); 
    }
}

function delPreke($nr) {
    $nr = htmlspecialchars(trim($nr), ENT_QUOTES);

    $istr = "DELETE FROM prekes WHERE id='$nr' LIMIT 1";
    $del = mysqli_query(getConnection(), $istr);
    if(!$del) {
        echo "error: nepavyko ištrinti prekės" .mysql_error(getConnection());
    }
}

function updPreke($nr, $name, $price, $amount, $descr, $position) {
    $nr = htmlspecialchars(trim($nr), ENT_QUOTES);
    $name = htmlspecialchars(trim($name), ENT_QUOTES);
    $price = htmlspecialchars(trim($price), ENT_QUOTES);
    $amount = htmlspecialchars(trim($amount), ENT_QUOTES);
    $descr = htmlspecialchars(trim($descr), ENT_QUOTES);
    $position = htmlspecialchars(trim($position), ENT_QUOTES);

    $atn = "UPDATE prekes SET pavadinimas='$name', kaina='$price', kiekis='$amount', aprasymas='$descr', pozicija='$position'  WHERE id='$nr' LIMIT 1";
    $up = mysqli_query(getConnection(), $atn);
    if(!$up) {
        echo "error: nepavyko atnaujinti prekės" .mysql_error(getConnection()); 
    }
}

function getPrekes($count = 999) {
    $count = htmlspecialchars(trim($count), ENT_QUOTES);

    $get = "SELECT * FROM prekes LIMIT $count";
    $all = mysqli_query(getConnection(), $get);
    return $all;
    if(!$all) {
        echo "error: nepavyko ištraukt prekių" .mysql_error(getConnection()); 
    }
}