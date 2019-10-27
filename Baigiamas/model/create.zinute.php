<?php

include_once('zinutes.php');
$date = date('Y-m-d');
addZinute($_POST['vardas'], $_POST['email'], $date, $_POST['komentaras']);
header("Location: ../contact.php");