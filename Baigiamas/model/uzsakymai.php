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
        echo "error: nepavyko sukurti užsakymo" .mysqli_error(getConnection()); 
    }
}

function delUzsakymas($nr) {
    $nr = htmlspecialchars(trim($nr), ENT_QUOTES);
    
    $istr = "DELETE uzsakymai, uzsdetales FROM uzsakymai JOIN uzsdetales ON uzsakymai.id=uzsdetales.uzsakymo_id 
            WHERE uzsakymai.id=uzsdetales.uzsakymo_id AND uzsakymai.id=$nr";
    $del = mysqli_query(getConnection(), $istr);
    if(!$del) {
        echo "error: nepavyko ištrinti užsakymo" .mysqli_error(getConnection());
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
        echo "error: nepavyko atnaujinti užsakymo" .mysqli_error(getConnection()); 
    }
}

function getUzsakymus($count = 999) {
    $count = htmlspecialchars(trim($count), ENT_QUOTES);

    $get = "SELECT * FROM uzsakymai LIMIT $count";
    $all = mysqli_query(getConnection(), $get);
    return $all;
    if(!$all) {
        echo "error: nepavyko ištraukt užsakymų" .mysqli_error(getConnection()); 
    }
}

function getUzsakyma($nr) {
    $get = "SELECT uzsakymai.id, adresas, miestas, pastokod, totkaina, data, uzsakov_id, prekes_id, vnt 
            FROM uzsakymai, uzsdetales WHERE uzsakymai.id=uzsdetales.uzsakymo_id AND uzsakymai.id=$nr";
    $all = mysqli_query(getConnection(), $get);
    return $all;
}

