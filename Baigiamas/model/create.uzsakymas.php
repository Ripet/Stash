<?php 

include('uzsakymai.php');
$date = date('Y-m-d');
addUzsakymas($_POST['adr'], $_POST['miest'], $_POST['postal'], $_POST['total'], $date, $_POST['uzsakID']);
header("Location: ../topsecret.php");