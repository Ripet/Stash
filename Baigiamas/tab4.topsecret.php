<?php
    include_once('model/darbuotojai.php');
    $darbuotojuObj = getDarbuotojus();
?>

<div class="tab-pane fade" id="papildomas" role="tabpanel" aria-labelledby="papildomas-tab">
    <section class="pnlis m-2 row">
        <form class="p-2 col d-flex flex-column" action="model/upd.kontaktai.php" method="post">
            <h3>Koreguoti rekvizitus</h3>
            <input class="m-1" type="text" name="pav" value="" placeholder="Įmonės pavadinimas">
            <input class="m-1" type="text" name="adr" value="" placeholder="Gatvė, miestas">
            <input class="m-1" type="text" name="postal" value="" placeholder="Pašto kodas">
            <input class="m-1" type="text" name="tel" value="" placeholder="Telefono nr.">
            <input class="m-1" type="text" name="bankSas" value="" placeholder="Sąskaitos Nr.">
            <button class="btn-outline-info m-1" type="submit" onclick="">Koreguoti</button>
        </form>  
    </section>
    <section class="pnlis m-2 row">
        <form class="p-2 col d-flex flex-column" method="POST" action="model/upload.darbuotojai.php" enctype="multipart/form-data">
            <h3>Įkelti darbuotojo nuotrauką ir aprašymą</h3>
            <input class="m-1" type="file" name="image">
            <input class="m-1" type="text" name="vardas" placeholder="Darbuotojo vardas">
            <input class="m-1" type="text" name="pavarde" placeholder="Darbuotojo pavardė">
            <textarea class="m-1" id="text" cols="60" rows="5" name="image_text" placeholder="Darbuotojo aprašymas"></textarea>
            <button type="submit" class="btn-outline-success m-1" name="upload">Pridėti</button>
        </form>
        <form class="p-2 col d-flex flex-column" method="POST" action="model/upd.darbuotojai.php">
            <h3>Koreguoti darbuotojo duomenis</h3>
            <input class="m-1" type="text" name="darbid" placeholder="Darbuotojo ID">
            <input class="m-1" type="text" name="foto" placeholder="Nuotraukos pavadinimas su failo galūne">
            <input class="m-1" type="text" name="vardas" placeholder="Darbuotojo vardas">
            <input class="m-1" type="text" name="pavarde" placeholder="Darbuotojo pavardė">
            <textarea class="m-1" id="text" cols="60" rows="5" name="image_text" placeholder="Darbuotojo aprašymas"></textarea>
            <button type="submit" class="btn-outline-info m-1" name="upload">Koreguoti</button>
        </form>
    </section>
    <section class="pnlis m-2 row">
        <form class="p-2 col" method="POST" action="model/del.darbuotojai.php">
            <h3>Ištrinti darbuotoją</h3>
            <select name="pasirinkimasPenki" id="list-darbuotojai" class="listas" onchange="getDarbuotojusDb()">
                <option selected="selected">Pasirink darbuotoją</option>
        <?php   foreach($darbuotojuObj as $darbuotojas) { ?>
                <option class="dropdn-value" value="<?=$darbuotojas['id']?>"><?=$darbuotojas['vardas']?> <?=$darbuotojas['pavarde']?></option>
        <?php   } ?>
            </select>
            <button class="btn-outline-danger m-1" type="submit">Ištrinti darbuotoją</button>
            <ul id="ats5" class="list-group list-group-horizontal col d-flex align-items-stretch text-center flex-wrap"></ul>
        </form>
    </section>
</div>