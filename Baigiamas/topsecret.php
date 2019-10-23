<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sėdimųjų rojus</title>
    <meta name="description" content="Geriausios ir pigiausios kėdės">
    <!-- <link rel="icon" href="/favicon.ico" type="image/x-icon"> -->
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="container-fluid">
    <header class="row headeris d-flex justify-content-between align-items-center">
        <div class="col d-inline-flex justify-content-center">
            <img class="logotipas" src="img/logo.svg" alt="logotipas">
            <h1 class="titulinis">Sėdimųjų <span class="d-flex justify-content-end">adminas</span></h1>
        </div>
    </header>
    <main class="row flex-column">
        <?php
        
        include('model/prekes.php');
        
        // include('');

        $prekiuobj = getPrekes();
        
        ?>
        <!-- TABU PRADZIA -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="top-adm nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" st>PREKĖS</a>
            </li>
            <li class="nav-item">
                <a class="top-adm nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item">
                <a class="top-adm nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
            </li>
        </ul>
        <!-- TABU PABAIGA -->
        <div class="tab-content " id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <!-- PRIDETI PREKES PRADZIA -->
                <section class="pnlis m-2">
                    <h3>Pridėti prekes</h3>
                    <form class="p-2" action="model/create.preke.php" method="post">
                        <textarea type="text" name="apr" value="" placeholder="Prekės aprašymas" rows="8" cols="100"></textarea><br>
                        <input type="text" name="pav" value="" placeholder="Prekės pavadinimas">
                        <input type="text" name="kain" value="" placeholder="Prekės kaina">
                        <input type="text" name="kiek" value="" placeholder="Prekės kiekis">
                        <input type="text" name="poz" value="" placeholder="Prekės pozicija">
                        <button type="submit" onclick="">Pridėti</button>
                    </form>
                </section>
                <!-- PRIDETI PREKES PABAIGA -->
                <!-- FOTO EDIT PRADZIA -->
                <section class="pnlis m-2">
                    <h3>Pridėti/koreguoti/ištrinti prekių nuotraukas</h3>
                    <form class="p-2" action="model/create.foto.php" method="post">
                        <input type="text" name="foto1" value="" placeholder="Pirma prekės nuotrauka">
                        <input type="text" name="foto2" value="" placeholder="Antra prekės nuotrauka">
                        <input type="text" name="prekID" value="" placeholder="Prekės ID duomenų bazėje">
                        <button type="submit">Pridėti</button>
                    </form>
                    <form class="p-2" action="model/update.foto.php" method="post">
                        <input type="text" name="fotoID" value="" placeholder="Foto ID duomenų bazėje">
                        <input type="text" name="foto1" value="" placeholder="Pirma prekės nuotrauka">
                        <input type="text" name="foto2" value="" placeholder="Antra prekės nuotrauka">
                        <input type="text" name="prekID" value="" placeholder="Prekės ID duomenų bazėje">
                        <button type="submit">Koreguoti</button>
                    </form>
                    <form class="p-2" action="model/del.foto.php" method="post">
                        <input type="text" name="prekID" value="" placeholder="Foto ID duomenų bazėje">
                        <button type="submit">Trinti</button>
                    </form>
                </section>
                <!-- FOTO EDIT PABAIGA -->
                <!-- PREKIU EDIT PRADZIA -->
                <section class="pnlis m-2">
                    <h3>Peržiūrėti/koreguoti/trinti prekes</h3>
                    <form class="p-2" action="/model/prekes.php" method="post">
                        <!-- <input type="text" name="pozicija" value="" placeholder="Prekės pozicija">
                        <button type="submit">Pridėti</button> -->
                        <select name="pasirinkimas" class="listas">
                            <option selected>Pasirink prekę</option>
                        <?php   //Listas su prekiu pavadinimais
                                foreach($prekiuobj as $preke) { ?>
                                <option value="<?=$preke['id']?>"><?=$preke['pavadinimas']?></option>
                        <?php   } ?>
                        </select>
                    </form>
                </section>
                <!-- PREKIU EDIT PABAIGA -->
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
        </div> 
    </main>
    <script src="lib/jquery.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>