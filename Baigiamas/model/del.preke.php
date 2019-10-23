<?php 

include('prekes.php');
delPreke($_POST['pasirinkimas']);
header("Location: ../topsecret.php");