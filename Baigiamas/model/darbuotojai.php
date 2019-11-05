<?php

include_once('login.php');

function delDarbtuotoja($nr) {
    $nr = htmlspecialchars(trim($nr), ENT_QUOTES);

    $istr = "DELETE FROM darbuotojai WHERE id='$nr' LIMIT 1";
    $del = mysqli_query(getConnection(), $istr);
    if(!$del) {
        echo "error: nepavyko ištrinti darbuotojo" .mysqli_error(getConnection());
    }
}

function updDarbuotojus($nr, $name, $lname, $aprasymas, $ft) {
    $nr = htmlspecialchars(trim($nr), ENT_QUOTES);
    $name = htmlspecialchars(trim($name), ENT_QUOTES);
    $lname = htmlspecialchars(trim($lname), ENT_QUOTES);
    $aprasymas = htmlspecialchars(trim($aprasymas), ENT_QUOTES);
    $ft = htmlspecialchars(trim($ft), ENT_QUOTES);

    $atn = "UPDATE darbuotojai SET vardas='$name', pavarde='$lname', aprasymas='$aprasymas', nuotrauka='img/$ft' WHERE id='$nr' LIMIT 1";
    $up = mysqli_query(getConnection(), $atn);
    if(!$up) {
        echo "error: nepavyko atnaujinti foto" .mysqli_error(getConnection()); 
    }
}

function getDarbuotojus($count = 999) {
    $count = htmlspecialchars(trim($count), ENT_QUOTES);
    
    $get = "SELECT * FROM darbuotojai LIMIT $count";
    $all = mysqli_query(getConnection(), $get);
    return $all;
    if(!$all) {
        echo "error: nepavyko ištraukt darbuotoju" .mysqli_error(getConnection()); 
    }
}

function getDarbuotoja($nr) {
    $get = "SELECT * FROM darbuotojai WHERE id=$nr";
    $all = mysqli_query(getConnection(), $get);
    $masyvas = mysqli_fetch_assoc($all);
    return $masyvas;
}