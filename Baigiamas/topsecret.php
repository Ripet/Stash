<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sėdimųjų rojus</title>
    <meta name="description" content="Geriausios ir pigiausios kėdės">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="container-fluid">
    <header class="row headeris d-flex justify-content-center">
        <a class="nuimt" href="index.php">
            <div class="col d-inline-flex justify-content-center">
                <img class="logotipas" src="img/logo.svg" alt="logotipas">
                <h1 class="titulinis">Sėdimųjų <span class="d-flex justify-content-end">adminas</span></h1>
            </div>
        </a>
    </header>
    <main class="row d-flex flex-column">
        <div class="col">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="top-adm nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" >PREKĖS</a>
                </li>
                <li class="nav-item">
                    <a class="top-adm nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">UŽSAKYMAI</a>
                </li>
                <li class="nav-item">
                    <a class="top-adm nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Užsakovai/Žinutės</a>
                </li>
                <li class="nav-item">
                    <a class="top-adm nav-link" id="papildomas-tab" data-toggle="tab" href="#papildomas" role="tab" aria-controls="contact" aria-selected="false">Kiti nustatymai</a>
                </li>
            </ul>
        </div>
        <div class="col">
            <div class="tab-content " id="myTabContent">
                <?php include('tab1.topsecret.php'); ?>
                <?php include('tab2.topsecret.php'); ?>
                <?php include('tab3.topsecret.php'); ?>
                <?php include('tab4.topsecret.php'); ?>
            </div>
        </div>
    </main>
    <script src="lib/jquery.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>