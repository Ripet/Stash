<?php

include('login.php');

function addUzsakDetal($uzsak_id, $prek_id, $vnt, $col) {
    $uzsak_id = htmlspecialchars(trim($uzsak_id), ENT_QUOTES);
    $prek_id = htmlspecialchars(trim($prek_id), ENT_QUOTES);
    $vnt = htmlspecialchars(trim($vnt), ENT_QUOTES);
    $col = htmlspecialchars(trim($col), ENT_QUOTES);

    $add = "INSERT INTO uzsdetales VALUES (NULL, '$uzsak_id', '$prek_id', '$vnt', '$col')";
    $cr = mysqli_query(getConnection(), $add);
    if(!$cr) {
        echo "error: nepavyko sukurti užsakymo detalių" .mysql_error(getConnection()); 
    }
}

function delUzsakDetal($nr) {
    $$nr = htmlspecialchars(trim($nr), ENT_QUOTES);

    $istr = "DELETE FROM uzsdetales WHERE id='$nr' LIMIT 1";
    $del = mysqli_query(getConnection(), $istr);
    if(!$del) {
        echo "error: nepavyko ištrinti užsakymo detalių" .mysql_error(getConnection());
    }
}

function updUzsakDetal($nr, $uzsak_id, $prek_id, $vnt, $col) {
    $nr = htmlspecialchars(trim($nr), ENT_QUOTES);
    $uzsak_id = htmlspecialchars(trim($uzsak_id), ENT_QUOTES);
    $prek_id = htmlspecialchars(trim($prek_id), ENT_QUOTES);
    $vnt = htmlspecialchars(trim($vnt), ENT_QUOTES);
    $col = htmlspecialchars(trim($col), ENT_QUOTES);

    $atn = "UPDATE uzsdetales SET uzsakymo_id='$uzsak_id', prekes_id='$prek_id', vnt='$vnt', spalva='$col' WHERE id='$nr' LIMIT 1";
    $up = mysqli_query(getConnection(), $atn);
    if(!$up) {
        echo "error: nepavyko atnaujinti užsakymo detalių" .mysql_error(getConnection()); 
    }
}

function getUzsakDetal($count = 999) {
    $count = htmlspecialchars(trim($count), ENT_QUOTES);

    $get = "SELECT * FROM uzsdetales LIMIT $count";
    $all = mysqli_query(getConnection(), $get);
    return $all;
    if(!$all) {
        echo "error: nepavyko ištraukt užsakymo detalių" .mysql_error(getConnection()); 
    }
}