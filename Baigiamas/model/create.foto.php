<?php

include('foto.php');
addFoto($_POST['foto1'], $_POST['foto2'], $_POST['prekID']);
header("Location: ../topsecret.php");