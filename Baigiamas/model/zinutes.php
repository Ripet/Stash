<?php function addZinute($name, $email, $data, $msg) {
    $name = htmlspecialchars(trim($name), ENT_QUOTES);
    $email = htmlspecialchars(trim($email), ENT_QUOTES);
    $data = htmlspecialchars(trim($data), ENT_QUOTES);
    $msg = htmlspecialchars(trim($msg), ENT_QUOTES);

    $add = "INSERT INTO zinutes VALUES (NULL, '$name', '$email', '$data', '$msg')";
    $cr = mysqli_query(getConnection(), $add);
    if(!$cr) {
        echo "error: nepavyko sukurti žinutės" .mysql_error(getConnection()); 
    }
}

function delZinute($nr) {
    $nr = htmlspecialchars(trim($nr), ENT_QUOTES);

    $istr = "DELETE FROM zinutes WHERE id='$nr' LIMIT 1";
    $del = mysqli_query(getConnection(), $istr);
    if(!$del) {
        echo "error: nepavyko ištrinti žinutės" .mysql_error(getConnection());
    }
}

function updZinute($nr, $name, $email, $data, $msg) {
    $nr = htmlspecialchars(trim($nr), ENT_QUOTES);
    $name = htmlspecialchars(trim($name), ENT_QUOTES);
    $email = htmlspecialchars(trim($email), ENT_QUOTES);
    $data = htmlspecialchars(trim($data), ENT_QUOTES);
    $msg = htmlspecialchars(trim($msg), ENT_QUOTES);

    $atn = "UPDATE zinutes SET vardas='$name', email='$email', data='$data', zinute='$msg' WHERE id='$nr' LIMIT 1";
    $up = mysqli_query(getConnection(), $atn);
    if(!$up) {
        echo "error: nepavyko atnaujinti žinutės" .mysql_error(getConnection()); 
    }
}


function getZinutes($count = 999) {
    $count = htmlspecialchars(trim($count), ENT_QUOTES);

    $get = "SELECT * FROM zinutes LIMIT $count";
    $all = mysqli_query(getConnection(), $get);
    return $all;
    if(!$all) {
        echo "error: nepavyko ištraukt žinutės" .mysql_error(getConnection()); 
    }
}