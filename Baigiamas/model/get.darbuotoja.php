<?php

include('darbuotojai.php');

$array = getDarbuotoja($_POST['nr']);

echo json_encode($array);