<?php 

include('uzsakovas.php');
updUzsakovas($_POST['pirkID'], $_POST['vard'], $_POST['pavard'], $_POST['email'], $_POST['tel'], $_POST['adr'], $_POST['miestas'], $_POST['postal']);
header("Location: ../topsecret.php");