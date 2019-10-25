<?php

include('prekes.php');
$array = getPreke($_POST['nr']);
echo json_encode($array);

// print_r($array);

// echo 'labas2';

// print_r($_POST);