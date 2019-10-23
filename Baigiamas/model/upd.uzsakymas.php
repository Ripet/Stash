<?php 

include('uzsakymai.php');
updUzsakymas($_POST['uzsakymoID'], $_POST['adr'], $_POST['miest'], $_POST['postal'], $_POST['total'], $_POST['data'], $_POST['uzsakID']);
header("Location: ../topsecret.php");