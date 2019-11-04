<?php

include('login.php');

session_start();

$user_check = $_SESSION['login_user'];

$sql = "SELECT username FROM users WHERE username = '$user_check'";
$ses_sql = mysqli_query(getConnection(), $sql);

$row = mysqli_fetch_assoc($ses_sql);

$login_session = $row['username'];

if(!isset($_SESSION['login_user'])){
    header("location: ../index.php");
    die();
}