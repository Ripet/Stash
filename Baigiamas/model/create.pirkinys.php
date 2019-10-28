<?php

include_once('pirkinys.php');

$vard = $_POST['vardas'];
$pavard = $_POST['pavarde'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$adr = $_POST['adresas'];
$city = $_POST['miestas'];
$post = $_POST['pastkod'];
$vnt = $_POST['kiekis'];
$total = $_POST['total'];
$prID = $_POST['prekesID'];
$date = date('Y-m-d');

// addUzsakovas($vard, $pavard, $email, $tel, $adr, $city, $post);
$uzsakovoID = getUzsakovasId('$tel');
// addUzsakymas($adr, $city, $post, $total, $date, $uzsakovoID);
// $uzsakymoID = getUzsakymoID($total);
// addUzsakDetal($uzsakymoID, $prID, $vnt);
echo $uzsakovoID;
echo $vard;
echo $pavard;
echo $email;
echo $tel;
echo $adr;
echo $city;
echo $post;
echo $vnt;
echo $total; 
echo $prID;
echo $date;



// $tables = $html->find('table[id=prekiulentele]');
// echo $pavad;
// print_r($vnt);
// print_r($tables);
// header("Location: ../cart.php");