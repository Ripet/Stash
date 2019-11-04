<?php

include_once('login.php');

function addUzsakovasIrUzsakymasIrDetales($name, $lname, $email, $tel, $adr, $city, $postal, $total, $data, $prek_id, $vnt) {
    $name = htmlspecialchars(trim($name), ENT_QUOTES);
    $lname = htmlspecialchars(trim($lname), ENT_QUOTES);
    $email = htmlspecialchars(trim($email), ENT_QUOTES);
    $tel = htmlspecialchars(trim($tel), ENT_QUOTES);
    $adr = htmlspecialchars(trim($adr), ENT_QUOTES);
    $city = htmlspecialchars(trim($city), ENT_QUOTES);
    $postal = htmlspecialchars(trim($postal), ENT_QUOTES);
    $total = htmlspecialchars(trim($total), ENT_QUOTES);
    $data = htmlspecialchars(trim($data), ENT_QUOTES);

    $add = "INSERT INTO uzsakovas VALUES (NULL, '$name', '$lname', '$email', '$tel', '$adr', '$city', '$postal');";
    $add .= "INSERT INTO uzsakymai VALUES (NULL, '$adr', '$city', '$postal', '$total', '$data', LAST_INSERT_ID());";
    $cr =  mysqli_multi_query(getConnection(), $add);
    if(!$cr) {
        echo "error: nepavyko sukurti užsakymo" .mysqli_error(getConnection()); 
    } 
   
    mysqli_next_result(getConnection());

    $paimt = "SELECT max(id) FROM uzsakymai LIMIT 1;";
    $paimtas = mysqli_query(getConnection(), $paimt);
    $paskutinisID = mysqli_fetch_assoc($paimtas);
    if(!$paimtas) {
        echo "error: nepavyko sukurti užsakymo" .mysqli_error(getConnection()); 
    } 

    for($i = 0; $i < count($prek_id); $i++) {
    $add2 = "INSERT INTO uzsdetales VALUES (NULL, '{$paskutinisID['max(id)']}', '$prek_id[$i]', '$vnt[$i]');"; 
    $ca = mysqli_multi_query(getConnection(), $add2);
        if(!$ca) {
            echo "error: nepavyko sukurti užsakymo" .mysqli_error(getConnection()); 
        }
    }
    
    for($i = 0; $i < count($prek_id); $i++) {
    $add3 = "UPDATE prekes SET kiekis = kiekis - $vnt[$i] WHERE id=$prek_id[$i];";
    $ca = mysqli_multi_query(getConnection(), $add3);
        if(!$ca) {
            echo "error: nepavyko sukurti užsakymo" .mysqli_error(getConnection()); 
        }
    }

}