<?php

include_once('uzsakymai.php');
$array = getUzsakyma($_POST['nr']);

while ($row = mysqli_fetch_assoc($array)) {
    $arr[] = $row;
}

echo json_encode(array('data' => $arr));