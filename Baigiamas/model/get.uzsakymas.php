<?php

include_once('uzsakymai.php');
$array = getUzsakyma($_POST['nr']);
echo json_encode($array);