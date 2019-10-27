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

function delUzsakovas($nr) {
    $nr = htmlspecialchars(trim($nr), ENT_QUOTES);

    $istr = "DELETE FROM uzsakovas WHERE id='$nr' LIMIT 1";
    $del = mysqli_query(getConnection(), $istr);
    if(!$del) {
        echo "error: nepavyko ištrinti užsakovo" .mysql_error(getConnection());
    }
}

function updUzsakovas($nr, $name, $lname, $email, $tel, $adr, $city, $postal) {
    $nr = htmlspecialchars(trim($nr), ENT_QUOTES);
    $name = htmlspecialchars(trim($name), ENT_QUOTES);
    $lname = htmlspecialchars(trim($lname), ENT_QUOTES);
    $email = htmlspecialchars(trim($email), ENT_QUOTES);
    $tel = htmlspecialchars(trim($tel), ENT_QUOTES);
    $adr = htmlspecialchars(trim($adr), ENT_QUOTES);
    $city = htmlspecialchars(trim($city), ENT_QUOTES);
    $postal = htmlspecialchars(trim($postal), ENT_QUOTES);

    $atn = "UPDATE uzsakovas SET vardas='$name', pavard='$lname', emailas='$email', tel='$tel', adresas='$adr', 
    miestas='$city', pastkod='$postal' WHERE id='$nr' LIMIT 1";
    $up = mysqli_query(getConnection(), $atn);
    if(!$up) {
        echo "error: nepavyko atnaujinti užsakovo" .mysql_error(getConnection()); 
    }
}

function getUzsakovus($count = 999) {
    $count = htmlspecialchars(trim($count), ENT_QUOTES);

    $get = "SELECT * FROM uzsakovas LIMIT $count";
    $all = mysqli_query(getConnection(), $get);
    return $all;
    if(!$all) {
        echo "error: nepavyko ištraukt užsakovų" .mysql_error(getConnection()); 
    }
}

// function getUzsakova($nr) {
//     $get = "SELECT * FROM uzsakovas WHERE id=$nr";
//     $all = mysqli_query(getConnection(), $get);
//     $masyvas = mysqli_fetch_assoc($all);
//     return $masyvas;
// }

function getUzsakova($nr) {
    $get = "SELECT uzsakov_id, vardas, pavard, emailas, tel, uzsakovas.adresas, uzsakovas.miestas, pastkod, uzsakymai.id 
            FROM uzsakovas, uzsakymai WHERE uzsakovas.id=uzsakymai.uzsakov_id AND uzsakovas.id=$nr";
    $all = mysqli_query(getConnection(), $get);
    $masyvas = mysqli_fetch_assoc($all);
    return $masyvas;
}