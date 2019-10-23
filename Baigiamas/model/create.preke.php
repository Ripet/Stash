<?php 

include('prekes.php');
addPreke($_POST['pav'], $_POST['kain'], $_POST['kiek'], $_POST['apr'], $_POST['poz']);
header("Location: ../topsecret.php");