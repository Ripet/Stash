<?php 

include('uzsakymai.php');
delFoto($_POST['pasirinkimas']);
header("Location: ../topsecret.php");