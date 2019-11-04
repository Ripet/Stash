<?php
    include_once('model/prekes.php');
    $prekiuobj = getPrekes();
?>

<div class="tab-pane fade show active col" id="home" role="tabpanel" aria-labelledby="home-tab">
     <section class="pnlis m-2 row d-flex flex-column">
            <form class="p-2 col" action="model/del.preke.php" method="post">
                <h3 class="">Peržiūrėti/trinti prekes</h3>
                <select name="pasirinkimas" id="list-prekes" class="listas" onchange="getPrekFromDb()">
                    <option selected="selected">Pasirink prekę</option>
                <?php  foreach($prekiuobj as $preke) { ?>
                        <option class="dropdn-value" value="<?=$preke['id']?>"><?=$preke['pavadinimas']?></option>
                <?php   } ?>
                </select>
                <button class="btn-outline-danger m-1" type="submit">Ištrinti prekę su nuotraukomis</button>
            </form>
            <ul id="ats1" class="list-group list-group-horizontal col d-flex align-items-stretch text-center flex-wrap"></ul>
    </section>
    <section class="pnlis m-2 row"> 
        <form class="p-2 col d-flex flex-column" action="model/create.preke.php" method="post">
            <h3>Pridėti prekes</h3>
            <textarea class="m-1" type="text" name="apr" value="" placeholder="Prekės aprašymas" rows="5" cols="60"></textarea>
            <input class="m-1" type="text" name="pav" value="" placeholder="Prekės pavadinimas">
            <input class="m-1" type="text" name="kain" value="" placeholder="Prekės kaina">
            <input class="m-1" type="text" name="kiek" value="" placeholder="Prekės kiekis">
            <input class="m-1" type="text" name="poz" value="" placeholder="Prekės pozicija">
            <button type="submit m-1" class="btn-outline-success" onclick="">Pridėti</button>
        </form>
        <form class="p-2 col d-flex flex-column" action="model/create.foto.php" method="post">
            <h3>Pridėti nuotraukas</h3>
            <input class="m-1" type="text" name="foto1" value="" placeholder="Pirma prekės nuotrauka">
            <input class="m-1" type="text" name="foto2" value="" placeholder="Antra prekės nuotrauka">
            <input class="m-1" type="text" name="prekID" value="" placeholder="Prekės ID duomenų bazėje">
            <button type="submit m-1" class="btn-outline-success">Pridėti</button>
        </form>
    </section>
    <section class="pnlis m-2 row">
        <form class="p-2 col d-flex flex-column" action="model/upd.preke.php" method="post">
            <h3 >Koreguoti prekes</h3>
            <textarea class="m-1" type="text" name="apr" value="" placeholder="Prekės aprašymas" rows="5" cols="60"></textarea>
                <input class="m-1" type="text" name="prekID" value="" placeholder="Prekės ID duomenų bazėje">
                <input class="m-1" type="text" name="pav" value="" placeholder="Prekės pavadinimas">
                <input class="m-1" type="text" name="kain" value="" placeholder="Prekės kaina">
                <input class="m-1" type="text" name="kiek" value="" placeholder="Prekės kiekis">
                <input class="m-1" type="text" name="poz" value="" placeholder="Prekės pozicija">
            <button type="submit m-1" class="btn-outline-info">Koreguoti</button>
        </form>
        <form class="p-2 col d-flex flex-column" action="model/upd.foto.php" method="post">
            <h3 >Koreguoti nuotraukas</h3>
            <input class="m-1" type="text" name="fotoID" value="" placeholder="Foto ID duomenų bazėje">
            <input class="m-1" type="text" name="foto1" value="" placeholder="Pirma prekės nuotrauka">
            <input class="m-1" type="text" name="foto2" value="" placeholder="Antra prekės nuotrauka">
            <input class="m-1" type="text" name="prekID" value="" placeholder="Prekės ID duomenų bazėje">
            <button type="submit m-1" class="btn-outline-info">Koreguoti</button>
        </form>
    </section>
</div>