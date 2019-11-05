<?php

include_once('darbuotojai.php');
updDarbuotojus($_POST['darbid'], $_POST['vardas'], $_POST['pavarde'], $_POST['image_text'], $_POST['foto']);
header("Location: ../topsecret.php");