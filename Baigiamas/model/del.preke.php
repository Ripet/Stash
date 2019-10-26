<?php 

include_once('prekes.php');
$nr = $_POST['pasirinkimas'];
delPreke($nr);
header("Location: ../topsecret.php");