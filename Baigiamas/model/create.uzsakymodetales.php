<?php 

include('uzsakdetales.php');
addUzsakDetal($_POST['uzsakymoID'], $_POST['prekesID'], $_POST['vnt']);
header("Location: ../topsecret.php");