<?php 

include('foto.php');
updFoto($_POST['fotoID'], $_POST['foto1'], $_POST['foto2'], $_POST['prekID']);
header("Location: ../topsecret.php");