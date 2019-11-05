<?php

include_once('uzsakymai.php');
$array = getUzsakyma($_POST['nr']);

foreach($array as $ar){
echo json_encode($ar);
}