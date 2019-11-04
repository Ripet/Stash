<?php
include_once('login.php');


function updKontaktus($pavad, $adresas, $postal, $tel, $bankoSas) {
    $pavad = htmlspecialchars(trim($pavad), ENT_QUOTES);
    $adresas = htmlspecialchars(trim($adresas), ENT_QUOTES);
    $postal = htmlspecialchars(trim($postal), ENT_QUOTES);
    $tel = htmlspecialchars(trim($tel), ENT_QUOTES);
    $bankoSas = htmlspecialchars(trim($bankoSas), ENT_QUOTES);

    $atn = "UPDATE kontaktai SET pavadinimas='$pavad', adresas='$adresas', pastokod='$postal', 
    tel='$tel', bankSasNr='$bankoSas' WHERE id=1";
    $up = mysqli_query(getConnection(), $atn);
    if(!$up) {
        echo "error: nepavyko atnaujinti užsakymo" .mysqli_error(getConnection()); 
    }
}

function getKontaktus() {
    $get = "SELECT * FROM kontaktai WHERE id=1";
    $all = mysqli_query(getConnection(), $get);
    $masyvas = mysqli_fetch_assoc($all);
    return $masyvas;
}