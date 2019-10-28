<?php 

include_once('zinutes.php');
delZinute($_POST['pasirinkimasKeturi']);
header("Location: ../topsecret.php");