<?php

include_once('uzsakovas.php');
$array = getUzsakova($_POST['nr']);
echo json_encode($array);