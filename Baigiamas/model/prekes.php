<?php

include_once('login.php');

function addPreke($name, $price, $amount, $descr, $position) {
    $name = htmlspecialchars(trim($name), ENT_QUOTES);
    $price = htmlspecialchars(trim($price), ENT_QUOTES);
    $amount = htmlspecialchars(trim($amount), ENT_QUOTES);
    $descr = htmlspecialchars(trim($descr), ENT_QUOTES);
    $position = htmlspecialchars(trim($position), ENT_QUOTES);

    $add = "INSERT INTO prekes VALUES (NULL, '$name', '$price', '$amount', '$descr', '$position')";
    $cr = mysqli_query(getConnection(), $add);
    if(!$cr) {
        echo "error: nepavyko sukurti prekės" .mysqli_error(getConnection()); 
    }
}

function delPreke($nr) {
    $nr = htmlspecialchars(trim($nr), ENT_QUOTES);

    $istr = "DELETE prekes, foto FROM prekes JOIN foto ON prekes.id=foto.prek_id WHERE prekes.id=foto.prek_id AND prekes.id=$nr";
    $del = mysqli_query(getConnection(), $istr);
    if(!$del) {
        echo "error: nepavyko ištrinti prekės" .mysqli_error(getConnection());
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
        echo "error: nepavyko atnaujinti prekės" .mysqli_error(getConnection()); 
    }
}

function getPrekes($count = 999) {
    $count = htmlspecialchars(trim($count), ENT_QUOTES);

    $get = "SELECT prekes.id, pavadinimas, kaina, kiekis, aprasymas, pozicija, foto1, foto2 FROM prekes, foto WHERE prekes.id=foto.prek_id LIMIT $count";
    $all = mysqli_query(getConnection(), $get);
    return $all;
    if(!$all) {
        echo "error: nepavyko ištraukt prekių" .mysqli_error(getConnection()); 
    }
}

function getPreke($nr) {
    $get = "SELECT prekes.id, pavadinimas, kaina, kiekis, aprasymas, pozicija, foto1, foto2 FROM prekes, foto WHERE prekes.id=foto.prek_id AND prekes.id=$nr";
    $all = mysqli_query(getConnection(), $get);
    $masyvas = mysqli_fetch_assoc($all);
    return $masyvas;
}