<?php
$debug_mode = 0;

define('MYSQL_VARTOTOJAS', 'root');
define('MYSQL_SLAPTAZODIS', '');
define('DB_VARDAS', 'baigiamojodb');
define('DB_HOST', 'localhost');

$prisijungimas = mysqli_connect(DB_HOST, MYSQL_VARTOTOJAS, MYSQL_SLAPTAZODIS, DB_VARDAS);

function getConnection(){
    global $prisijungimas, $debug_mode;
        if($prisijungimas) {
            if($debug_mode > 0) { 
                echo "Prisijungete prie DB sekmingai <br>";
            } 
            return $prisijungimas;
        } else {
        echo "error, nepavyko prisijungtis".mysqli_connect_error();
    }
}

mysqli_set_charset($prisijungimas, 'utf8');