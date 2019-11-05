<?php 
include('login.php');

// Initialize message variable
$msg = "";


if (isset($_POST['upload'])) {
    $image = $_FILES['image']['name'];
    $image_text = mysqli_real_escape_string(getConnection(), $_POST['image_text']);
    $name = mysqli_real_escape_string(getConnection(), $_POST['vardas']);
    $lname = mysqli_real_escape_string(getConnection(), $_POST['pavarde']);
    $target = "../img/".basename($image);

    $sql = "INSERT INTO darbuotojai VALUES (NULL, '$name', '$lname', '$image_text', 'img/$image')";

    $upl = mysqli_query(getConnection(), $sql);
    if(!$upl) {
        echo "error: nepavyko pridėti darbuotojo: " .mysqli_error(getConnection());
    }

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    } else {
        echo "error: nepavyko pridėti nuotraukos: " .mysqli_error(getConnection());
    }
}

header("Location: ../topsecret.php");