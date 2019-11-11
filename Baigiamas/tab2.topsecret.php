<?php
    include_once('model/check.session.php');
    include_once('model/uzsakymai.php');
    $uzsakymuObj = getUzsakymus();
?>

<div class="tab-pane fade col" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <section class="pnlis m-2 row">
        <form class="p-2" action="model/del.uzsakymas.php" method="post">
            <h3>Peržiūrėti/trinti užsakymus</h3>
            <select name="pasirinkimasDu" id="list-uzsakymai" class="listas" onchange="getUzsakymusFromDb()">
                <option selected>Pasirink užsakymą</option>
            <?php   foreach($uzsakymuObj as $uzsakym) { ?>
                    <option class="dropdn-value" value="<?=$uzsakym['id']?>"><?=$uzsakym['id']?></option>
            <?php   } ?>
            </select>
            <button class="btn-outline-danger m-1" type="submit">Ištrinti užsakymą ir detales</button>
            <ul id="ats2" class="list-group list-group-horizontal col d-flex align-items-stretch text-center flex-wrap"></ul>
        </form>
    </section>
    <section class="pnlis m-2 row">
        <form class="p-2 col d-flex flex-column" action="model/create.uzsakymas.php" method="post">
        <h3>Pridėti užsakymą</h3>
            <input class="m-1" type="text" name="adr" value="" placeholder="Gatvė">
            <input class="m-1" type="text" name="miest" value="" placeholder="Miestas">
            <input class="m-1" type="text" name="postal" value="" placeholder="Pašto kodas">
            <input class="m-1" type="text" name="total" value="" placeholder="Bendra užsakymo kaina">
            <input class="m-1" type="text" name="uzsakID" value="" placeholder="Užsakovo ID">
            <button class="btn-outline-success m-1" type="submit" onclick="">Pridėti</button>
        </form>
        <form class="p-2 col d-flex flex-column" action="model/create.uzsakymodetales.php" method="post">
        <h3>Pridėti užsakymo detales</h3>
            <input class="m-1" type="text" name="uzsakymoID" value="" placeholder="Užsakymo ID">
            <input class="m-1" type="text" name="prekesID" value="" placeholder="Prekės ID">
            <input class="m-1" type="text" name="vnt" value="" placeholder="Prekės vienetai">
            <button class="btn-outline-success m-1" type="submit" onclick="">Pridėti</button>
        </form>
    </section>
    <section class="pnlis m-2 row">
        <form class="p-2 col d-flex flex-column" action="model/upd.uzsakymas.php" method="post">
            <h3>Koreguoti užsakymą</h3>
            <input class="m-1" type="text" name="uzsakymoID" value="" placeholder="Užsakymo ID">
            <input class="m-1" type="text" name="adr" value="" placeholder="Gatvė">
            <input class="m-1" type="text" name="miest" value="" placeholder="Miestas">
            <input class="m-1" type="text" name="postal" value="" placeholder="Pašto kodas">
            <input class="m-1" type="text" name="total" value="" placeholder="Bendra užsakymo kaina">
            <input class="m-1" type="text" name="data" value="" placeholder="Užsakymo data">
            <input class="m-1" type="text" name="uzsakID" value="" placeholder="Užsakovo ID">
            <button class="btn-outline-info m-1" type="submit" onclick="">Koreguoti</button>
        </form>
        <form class="p-2 col d-flex flex-column" action="model/upd.uzsakymodetales.php" method="post">
            <h3>Koreguoti užsakymo detales</h3>
            <input class="m-1" type="text" name="uzsakymoDetID" value="" placeholder="Užsakymo detalių ID">
            <input class="m-1" type="text" name="uzsakymoID" value="" placeholder="Užsakymo ID">
            <input class="m-1" type="text" name="prekesID" value="" placeholder="Prekės ID">
            <input class="m-1" type="text" name="vnt" value="" placeholder="Prekės vienetai">
            <button class="btn-outline-info m-1" type="submit" onclick="">Koreguoti</button>
        </form>
    </section>
</div>