<?php 

include_once('uzsakymai.php');
delUzsakymas($_POST['pasirinkimasDu']);
header("Location: ../topsecret.php");