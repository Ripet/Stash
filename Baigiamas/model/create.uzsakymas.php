<?php 

include('uzsakymai.php');
addUzsakymas($_POST['adr'], $_POST['miest'], $_POST['postal'], $_POST['total'], $_POST['data'], $_POST['uzsakID']);
header("Location: ../topsecret.php");