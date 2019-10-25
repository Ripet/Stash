<?php

include_once('login.php');

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

function delUzsakymas($nr) {
    $nr = htmlspecialchars(trim($nr), ENT_QUOTES);
    
    $istr = "DELETE FROM uzsakymai WHERE id='$nr' LIMIT 1";
    $del = mysqli_query(getConnection(), $istr);
    if(!$del) {
        echo "error: nepavyko ištrinti užsakymo" .mysql_error(getConnection());
    }
}

function updUzsakymas($nr, $adr, $city, $postal, $total, $data, $uzsakov_id) {
    $nr = htmlspecialchars(trim($nr), ENT_QUOTES);
    $adr = htmlspecialchars(trim($adr), ENT_QUOTES);
    $city = htmlspecialchars(trim($city), ENT_QUOTES);
    $postal = htmlspecialchars(trim($postal), ENT_QUOTES);
    $total = htmlspecialchars(trim($total), ENT_QUOTES);
    $data = htmlspecialchars(trim($data), ENT_QUOTES);
    $uzsakov_id = htmlspecialchars(trim($uzsakov_id), ENT_QUOTES);

    $atn = "UPDATE uzsakymai SET adresas='$adr', miestas='$city', pastokod='$postal', totkaina='$total', data='$data', uzsakov_id='$uzsakov_id' WHERE id='$nr' LIMIT 1";
    $up = mysqli_query(getConnection(), $atn);
    if(!$up) {
        echo "error: nepavyko atnaujinti užsakymo" .mysql_error(getConnection()); 
    }
}

function getUzsakymus($count = 999) {
    $count = htmlspecialchars(trim($count), ENT_QUOTES);

    $get = "SELECT * FROM uzsakymai LIMIT $count";
    $all = mysqli_query(getConnection(), $get);
    return $all;
    if(!$all) {
        echo "error: nepavyko ištraukt užsakymų" .mysql_error(getConnection()); 
    }
}