<?php

include_once('login.php');

session_start();
   
if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $myusername = mysqli_real_escape_string(getConnection(), $_POST['vardas']);
    $mypassword = mysqli_real_escape_string(getConnection(), $_POST['slaptazodis']); 
    
    $sql = "SELECT id FROM users WHERE username = '$myusername' AND password = '$mypassword'";
    $result = mysqli_query(getConnection(), $sql);
    $row = mysqli_fetch_assoc($result);
    
    $count = mysqli_num_rows($result);
    
    if($count == 1) {
        $_SESSION['login_user'] = $myusername;
        
        header("location: ../topsecret.php");
    } else {
        header("location: ../index.php");
    }
}