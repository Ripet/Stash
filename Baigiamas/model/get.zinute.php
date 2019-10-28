<?php

include_once('zinutes.php');
$array = getZinute($_POST['nr']);
echo json_encode($array);