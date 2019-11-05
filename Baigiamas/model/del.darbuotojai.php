<?php
include_once('darbuotojai.php');

delDarbtuotoja($_POST['pasirinkimasPenki']);

header('Location: ../topsecret.php');