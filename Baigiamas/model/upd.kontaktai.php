<?php

include('kontaktai.php');
updKontaktus($_POST['pav'], $_POST['adr'], $_POST['postal'], $_POST['tel'], $_POST['bankSas']);
header("Location: ../topsecret.php");