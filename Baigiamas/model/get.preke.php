<?php

include('prekes.php');
$array = getPreke($_POST['nr']);
echo json_encode($array);