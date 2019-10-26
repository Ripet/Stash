<?php

include_once('login.php');

function addFoto($ft1, $ft2, $prek_id) {
    $ft1 = htmlspecialchars(trim($ft1), ENT_QUOTES);
    $ft2 = htmlspecialchars(trim($ft2), ENT_QUOTES);
    $prek_id = htmlspecialchars(trim($prek_id), ENT_QUOTES);

    $add = "INSERT INTO foto VALUES (NULL, '$ft1', '$ft2', '$prek_id')";
    $cr = mysqli_query(getConnection(), $add);
    if(!$cr) {
        echo "error: nepavyko pridėti foto" .mysql_error(getConnection()); 
    }
}

function delFoto($nr) {
    $nr = htmlspecialchars(trim($nr), ENT_QUOTES);

    $istr = "DELETE FROM foto WHERE id='$nr' LIMIT 1";
    $del = mysqli_query(getConnection(), $istr);
    if(!$del) {
        echo "error: nepavyko ištrinti foto" .mysql_error(getConnection());
    }
}

function updFoto($nr, $ft1, $ft2, $prek_id) {
    $nr = htmlspecialchars(trim($nr), ENT_QUOTES);
    $ft1 = htmlspecialchars(trim($ft1), ENT_QUOTES);
    $ft2 = htmlspecialchars(trim($ft2), ENT_QUOTES);
    $prek_id = htmlspecialchars(trim($prek_id), ENT_QUOTES);

    $atn = "UPDATE foto SET foto1='$ft1', foto2='$ft2', prek_id='$prek_id' WHERE id='$nr' LIMIT 1";
    $up = mysqli_query(getConnection(), $atn);
    if(!$up) {
        echo "error: nepavyko atnaujinti foto" .mysql_error(getConnection()); 
    }
}

function getFotos($count = 999) {
    $count = htmlspecialchars(trim($count), ENT_QUOTES);
    
    $get = "SELECT * FROM foto LIMIT $count";
    $all = mysqli_query(getConnection(), $get);
    return $all;
    if(!$all) {
        echo "error: nepavyko ištraukt foto" .mysql_error(getConnection()); 
    }
}

function getFoto($nr) {
    $get = "SELECT * FROM foto WHERE prek_id=$nr";
    $all = mysqli_query(getConnection(), $get);
    $masyvas = mysqli_fetch_assoc($all);
    return $masyvas;
}