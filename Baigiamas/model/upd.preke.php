<?php 

include('prekes.php');
updPreke($_POST['prekID'], $_POST['pav'], $_POST['kain'], $_POST['kiek'], $_POST['apr'], $_POST['poz']);
header("Location: ../topsecret.php");

