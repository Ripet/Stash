<?php 

include('uzsakovas.php');
addUzsakovas($_POST['vard'], $_POST['pavard'], $_POST['email'], $_POST['tel'], $_POST['adr'], $_POST['miestas'], $_POST['postal']);
header("Location: ../topsecret.php");