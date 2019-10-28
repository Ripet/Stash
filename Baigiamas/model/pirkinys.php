<?php

include_once('login.php');

function addUzsakovas($name, $lname, $email, $tel, $adr, $city, $postal) {
    $name = htmlspecialchars(trim($name), ENT_QUOTES);
    $lname = htmlspecialchars(trim($lname), ENT_QUOTES);
    $email = htmlspecialchars(trim($email), ENT_QUOTES);
    $tel = htmlspecialchars(trim($tel), ENT_QUOTES);
    $adr = htmlspecialchars(trim($adr), ENT_QUOTES);
    $city = htmlspecialchars(trim($city), ENT_QUOTES);
    $postal = htmlspecialchars(trim($postal), ENT_QUOTES);

    $add = "INSERT INTO uzsakovas VALUES (NULL, '$name', '$lname', '$email', '$tel', '$adr', '$city', '$postal')";
    $cr = mysqli_query(getConnection(), $add);
    if(!$cr) {
        echo "error: nepavyko sukurti užsakovo" .mysql_error(getConnection()); 
    }
}

function addUzsakymas($adr, $city, $postal, $total, $data, $uzsakov_id) {
    $adr = htmlspecialchars(trim($adr), ENT_QUOTES);
    $city = htmlspecialchars(trim($city), ENT_QUOTES);
    $postal = htmlspecialchars(trim($postal), ENT_QUOTES);
    $total = htmlspecialchars(trim($total), ENT_QUOTES);
    $data = htmlspecialchars(trim($data), ENT_QUOTES);
    $uzsakov_id = htmlspecialchars(trim($uzsakov_id), ENT_QUOTES);

    $add = "INSERT INTO uzsakymai VALUES (NULL, '$adr', '$city', '$postal', '$total', '$data', '$uzsakov_id')";
    $cr = mysqli_query(getConnection(), $add);
    if(!$cr) {
        echo "error: nepavyko sukurti užsakymo" .mysql_error(getConnection()); 
    }
}

function addUzsakDetal($uzsak_id, $prek_id, $vnt) {
    $uzsak_id = htmlspecialchars(trim($uzsak_id), ENT_QUOTES);
    $prek_id = htmlspecialchars(trim($prek_id), ENT_QUOTES);
    $vnt = htmlspecialchars(trim($vnt), ENT_QUOTES);
    
    $add = "INSERT INTO uzsdetales VALUES (NULL, '$uzsak_id', '$prek_id', '$vnt')";
    $cr = mysqli_query(getConnection(), $add);
    if(!$cr) {
        echo "error: nepavyko sukurti užsakymo detalių" .mysql_error(getConnection()); 
    }
}

function getUzsakovasId($nr) {
    $get = "SELECT id FROM uzsakovas WHERE tel=$nr";
    $all = mysqli_query(getConnection(), $get);
    $masyvas = mysqli_fetch_assoc($all);
    return $masyvas;
}

function getUzsakymoID($nr) {
    $get = "SELECT id FROM uzsakymai WHERE totkaina=$nr";
    $all = mysqli_query(getConnection(), $get);
    $masyvas = mysqli_fetch_assoc($all);
    return $masyvas;
}