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
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="container-fluid d-flex flex-column">
    <header class="row headeris">
        <div class="col-7 d-flex justify-content-end">
            <a class="nuimt" href="index.php">
                <div class="col d-inline-flex justify-content-center">
                    <img class="logotipas" src="img/logo.svg" alt="logotipas">
                    <h1 class="titulinis">Sėdimųjų <span class="d-flex justify-content-end">rojus</span></h1>
                </div>
            </a>
        </div>
        </a>
        <div class="col-5 d-flex justify-content-end">
            <form action="model/admin.login.php" method="post">
                <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Prisijungimas</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form mb-2">
                                <i class="fas fa-user prefix grey-text"></i>
                                <input type="text" id="orangeForm-name" name="vardas" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Prisijungimo vardas</label>
                            </div>
                            <div class="md-form mb-2">
                                <i class="fas fa-lock prefix grey-text"></i>
                                <input type="password" id="orangeForm-pass" name="slaptazodis" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-pass">Slaptažodis</label>
                            </div>
                        </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <button class="btn btn-deep-orange" type="submit">Prisijungti</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="knopke"><a class="nuimt" data-toggle="modal" data-target="#modalRegisterForm"><img class="loginas" src="img/user.svg" alt="prisijungimas"></a></button>
            </form>
            <button class="knopke"><a class="nuimt" href="cart.php"><img class="krepselis" src="img/cart.svg" alt="krepselis"></a></button>
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
    <div>