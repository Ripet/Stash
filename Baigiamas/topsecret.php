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
        <div class="col d-inline-flex justify-content-center">
            <img class="logotipas" src="img/logo.svg" alt="logotipas">
            <h1 class="titulinis">Sėdimųjų <span class="d-flex justify-content-end">adminas</span></h1>
        </div>
    </header>
    <main class="row flex-column">
        <!-- TABU PRADZIA -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="top-adm nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" st>PREKĖS</a>
            </li>
            <li class="nav-item">
                <a class="top-adm nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">UŽSAKYMAI</a>
            </li>
            <li class="nav-item">
                <a class="top-adm nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Užsakovai/Žinutės</a>
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
                    <form class="p-2" action="model/upd.foto.php" method="post">
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
                        <form class="p-2" action="model/del.preke.php" method="post">
                            <?php
                            //DROPDOWN LISTUI
                            include_once('model/prekes.php');
                            $prekiuobj = getPrekes();
                            ?>
                            <select name="pasirinkimas" id="list-prekes" class="listas" onchange="getPrekFromDb()">
                                <option selected>Pasirink prekę</option>
                            <?php   //Listas su prekiu pavadinimais
                                    foreach($prekiuobj as $preke) { ?>
                                    <option class="dropdn-value" value="<?=$preke['id']?>"><?=$preke['pavadinimas']?></option>
                            <?php   } ?>
                            </select>
                            <button type="submit">Ištrinti</button>
                            <div id="ats1"></div>
                        </form>
                        <form class="p-2" action="model/upd.preke.php" method="post">
                        <textarea type="text" name="apr" value="" placeholder="Prekės aprašymas" rows="8" cols="100"></textarea><br>
                            <input type="text" name="prekID" value="" placeholder="Prekės ID duomenų bazėje">
                            <input type="text" name="pav" value="" placeholder="Prekės pavadinimas">
                            <input type="text" name="kain" value="" placeholder="Prekės kaina">
                            <input type="text" name="kiek" value="" placeholder="Prekės kiekis">
                            <input type="text" name="poz" value="" placeholder="Prekės pozicija">
                        <button type="submit">Koreguoti</button>
                    </form>
                </section>
                <!-- PREKIU EDIT PABAIGA -->
            </div>
            <!-- NAUJAS TABAS -->
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <!-- UZSAKYMU/DETALIU PRIDEJIMO PRADZIA -->
                <section class="pnlis m-2">
                    <h3>Pridėti užsakymą</h3>
                    <form class="p-2" action="model/create.uzsakymas.php" method="post">
                        <input type="text" name="adr" value="" placeholder="Gatvė">
                        <input type="text" name="miest" value="" placeholder="Miestas">
                        <input type="text" name="postal" value="" placeholder="Pašto kodas">
                        <input type="text" name="total" value="" placeholder="Bendra užsakymo kaina">
                        <input type="text" name="data" value="" placeholder="Užsakymo data">
                        <input type="text" name="uzsakID" value="" placeholder="Užsakovo ID">
                        <button type="submit" onclick="">Pridėti</button>
                    </form>
                    <h3>Pridėti užsakymo detales</h3>
                    <form class="p-2" action="model/create.uzsakymodetales.php" method="post">
                        <input type="text" name="uzsakymoID" value="" placeholder="Užsakymo ID">
                        <input type="text" name="prekesID" value="" placeholder="Prekės ID">
                        <input type="text" name="vnt" value="" placeholder="Prekės vienetai">
                        <input type="text" name="spalva" value="" placeholder="Prekės spalva">
                        <button type="submit" onclick="">Pridėti</button>
                    </form>
                </section>
                <!-- UZSAKYMU/DETALIU PRIDEJIMO PABAIGA - KOREGAVIMO PRADZIA -->
                <section class="pnlis m-2">
                    <h3>Koreguoti užsakymą</h3>
                    <form class="p-2" action="model/upd.uzsakymas.php" method="post">
                        <input type="text" name="uzsakymoID" value="" placeholder="Užsakymo ID">
                        <input type="text" name="adr" value="" placeholder="Gatvė">
                        <input type="text" name="miest" value="" placeholder="Miestas">
                        <input type="text" name="postal" value="" placeholder="Pašto kodas">
                        <input type="text" name="total" value="" placeholder="Bendra užsakymo kaina">
                        <input type="text" name="data" value="" placeholder="Užsakymo data">
                        <input type="text" name="uzsakID" value="" placeholder="Užsakovo ID">
                        <button type="submit" onclick="">Koreguoti</button>
                    </form>
                    <h3>Koreguoti užsakymo detales</h3>
                    <form class="p-2" action="model/upd.uzsakymodetales.php" method="post">
                        <input type="text" name="uzsakymoDetID" value="" placeholder="Užsakymo detalių ID">
                        <input type="text" name="uzsakymoID" value="" placeholder="Užsakymo ID">
                        <input type="text" name="prekesID" value="" placeholder="Prekės ID">
                        <input type="text" name="vnt" value="" placeholder="Prekės vienetai">
                        <input type="text" name="spalva" value="" placeholder="Prekės spalva">
                        <button type="submit" onclick="">Koreguoti</button>
                    </form>
                </section>
                <!-- UZSAKYMU KOREGAVIMO PABAIGA-TRYNIMO/PERZIUROS PRADZIA -->
                <section class="pnlis m-2">
                    <h3>Pasirinkt delete</h3>
                    <form class="p-2" action="model/del.uzsakymas.php" method="post">
                            <?php
                            //DROPDOWN LISTUI
                            include_once('model/uzsakymai.php');
                            $uzsakymuObj = getUzsakymus();
                            ?>
                            <select name="pasirinkimasDu" id="list-uzsakymai" class="listas" onchange="getUzsakymFromDb()">
                                <option selected>Pasirink užsakymą</option>
                            <?php   
                                    foreach($uzsakymuObj as $uzsakym) { ?>
                                    <option class="dropdn-value" value="<?=$uzsakym['id']?>"><?=$uzsakym['id']?></option>
                            <?php   } ?>
                            </select>
                            <button type="submit">Ištrinti</button>
                        <div id="ats2"></div>
                    </form>
                </section>
                <!-- UZSAKYMU/DETALIU TRYNIMO/PERZIUROS PABAIGA -->
            </div>
            <!-- NAUJAS TABAS -->
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <section class="pnlis m-2">
                    <h3>Pridėti užsakovą</h3>
                    <form class="p-2" action="model/create.uzsakovas.php" method="post">
                        <input type="text" name="vard" value="" placeholder="Vardas">
                        <input type="text" name="pavard" value="" placeholder="Pavardė">
                        <input type="text" name="email" value="" placeholder="El.paštas">
                        <input type="text" name="tel" value="" placeholder="Tel.nr.">
                        <input type="text" name="adr" value="" placeholder="Gatvė">
                        <input type="text" name="miestas" value="" placeholder="Miestas">
                        <input type="text" name="postal" value="" placeholder="Pašto kodas">
                        <button type="submit" onclick="">Pridėti</button>
                    </form>
                </section>
                <section class="pnlis m-2">
                    <h3>Koreguoti užsakovą</h3>
                    <form class="p-2" action="model/upd.uzsakovas.php" method="post">
                        <input type="text" name="pirkID" value="" placeholder="Užsakovo ID">
                        <input type="text" name="vard" value="" placeholder="Vardas">
                        <input type="text" name="pavard" value="" placeholder="Pavardė">
                        <input type="text" name="email" value="" placeholder="El.paštas">
                        <input type="text" name="tel" value="" placeholder="Tel.nr.">
                        <input type="text" name="adr" value="" placeholder="Gatvė">
                        <input type="text" name="miestas" value="" placeholder="Miestas">
                        <input type="text" name="postal" value="" placeholder="Pašto kodas">
                        <button type="submit" onclick="">Koreguoti</button>
                    </form>
                </section>
                <section class="pnlis m-2">
                    <h3>Peržiūrėti/trinti užsakovą</h3>
                    
                </section>
                <section class="pnlis m-2">
                    <h3>Peržiūrėti/trinti žinutes</h3>
                    
                </section>
            </div>
        </div> 
    </main>
    <script src="lib/jquery.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>