<?php 

include('uzsakdetales.php');
addUzsakDetal($_POST['uzsakymoID'], $_POST['prekesID'], $_POST['vnt'], $_POST['spalva']);
header("Location: ../topsecret.php");