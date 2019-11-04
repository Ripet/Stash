<?php

include_once('pirkinys.php');

$date = date('Y-m-d');

addUzsakovasIrUzsakymasIrDetales($_POST['vardas'], $_POST['pavarde'],  $_POST['email'], $_POST['tel'], 
$_POST['adresas'], $_POST['miestas'], $_POST['pastkod'], $_POST['total'], $date, $_POST['prekesID'], $_POST['kiekis']);

header("Location: ../cart.php");