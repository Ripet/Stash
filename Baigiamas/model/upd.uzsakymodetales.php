<?php 

include('uzsakdetales.php');
updUzsakDetal($_POST['uzsakymoDetID'], $_POST['uzsakymoID'], $_POST['prekesID'], $_POST['vnt'], $_POST['spalva']);
header("Location: ../topsecret.php");