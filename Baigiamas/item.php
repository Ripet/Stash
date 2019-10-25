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
    <header class="row headeris d-flex justify-content-between align-items-center">
        <div class="col"><img class="searchas" src="img/search.svg" alt="paieska"></div>
        <div class="col d-inline-flex justify-content-center">
            <img class="logotipas" src="img/logo.svg" alt="logotipas">
            <h1 class="titulinis">Sėdimųjų <span class="d-flex justify-content-end">rojus</span></h1>
        </div>
        <div class="col d-flex justify-content-end">
            <button class="knopke"><img class="loginas" src="img/user.svg" alt="prisijungimas"></button>
            <button class="knopke"><img class="krepselis" src="img/cart.svg" alt="krepselis"></button>
        </div>
    </header>
    <nav class="row">
        <div class="col p-2 mb-3 navigacija">
            <ul class="nav nav-justified">
                <li class="nav-item"><a href="index.php">apie mus</a></li>
                <li>|</li>
                <li class="nav-item"><a href="store.php">mūsų produktai</a></li>
                <li>|</li>
                <li class="nav-item"><a href="contact.php">susisiekite su mumis</a></li>
            </ul>
        </div>
    </nav>
    <?php
    include('model/prekes.php');
    $gautapreke = getPreke($_GET['nr']);
    ?>
    <main class="row flex-row">
        <section class="col">
            <img class="priekis">
            <img class="galas">
        </section>
        <section class="col">
            <div>
                <h1><?=$gautapreke['pavadinimas']?></h1>
                <p><?=$gautapreke['aprasymas']?></p>
                <p><?=$gautapreke['kaina']?> &euro;</p>
            </div>
            <div>
                <span>select color</span>
            </div>
            <div>
                
            </div>
            <button>Prideti i krepseli</button>
        </section>
    </main>
    <footer class="row footeris">
        <div class="col kontaktai d-flex justify-content-start align align-items-center">
            <ul class="list-unstyled">
                <li>MB Mediniai Medžiai</li>
                <li>Gatvių gatvė 24a, Kaunas</li>
                <li>LT-11111</li>
                <li>Tel: +30000000</li>
                <li>LT20000000000000000</li>
            </ul>
        </div>
        <div class="col trade d-flex justify-content-center align-items-end">
            <p>&copy; Nekopyk, 2019, RP</p>
        </div>
        <div class="col d-flex justify-content-end align align-items-center">
            <img class="social" src="img/facebook.svg" alt="mūsų facebook">
            <img class="social" src="img/twitter.svg" alt="mūsų twitter">
            <img class="social" src="img/pintrest.svg" alt="mūsų pintrest">
        </div>
    </footer>
    <script src="lib/jquery.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>