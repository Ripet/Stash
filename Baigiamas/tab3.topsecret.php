<?php
    include_once('model/uzsakovas.php');
    include_once('model/zinutes.php');
    $uzsakovoObj = getUzsakovus();
    $zinuciuObj = getZinutes();
?>

<div class="tab-pane fade col" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    <section class="pnlis m-2 row">
        <form class="p-2" action="model/del.uzsakovas.php" method="post">
            <h3>Peržiūrėti/trinti užsakovą</h3>
            <select name="pasirinkimasTrys" id="list-uzsakovai" class="listas" onchange="getUzsakovusFromDb()">
                <option selected>Pasirink užsakovą</option>
            <?php   foreach($uzsakovoObj as $uzsakym) { ?>
                    <option class="dropdn-value" value="<?=$uzsakym['id']?>">ID: <?=$uzsakym['id']?> | <?=$uzsakym['vardas']?>  <?=$uzsakym['pavard']?></option>
            <?php   } ?>
            </select>
            <button class="btn-outline-danger m-1" type="submit">Ištrinti užsakovą</button>
            <ul id="ats3" class="list-group list-group-horizontal col d-flex align-items-stretch text-center flex-wrap"></ul>
        </form>
    </section>
    <section class="pnlis m-2 row">
        <form class="p-2 col d-flex flex-column" action="model/create.uzsakovas.php" method="post">
            <h3>Pridėti užsakovą</h3>
            <input class="m-1" type="text" name="vard" value="" placeholder="Vardas">
            <input class="m-1" type="text" name="pavard" value="" placeholder="Pavardė">
            <input class="m-1" type="text" name="email" value="" placeholder="El.paštas">
            <input class="m-1" type="text" name="tel" value="" placeholder="Tel.nr.">
            <input class="m-1" type="text" name="adr" value="" placeholder="Gatvė">
            <input class="m-1" type="text" name="miestas" value="" placeholder="Miestas">
            <input class="m-1" type="text" name="postal" value="" placeholder="Pašto kodas">
            <button class="btn-outline-success m-1" type="submit" onclick="">Pridėti</button>
        </form>
        <form class="p-2 col d-flex flex-column" action="model/upd.uzsakovas.php" method="post">
            <h3>Koreguoti užsakovą</h3>
            <input class="m-1" type="text" name="pirkID" value="" placeholder="Užsakovo ID">
            <input class="m-1" type="text" name="vard" value="" placeholder="Vardas">
            <input class="m-1" type="text" name="pavard" value="" placeholder="Pavardė">
            <input class="m-1" type="text" name="email" value="" placeholder="El.paštas">
            <input class="m-1" type="text" name="tel" value="" placeholder="Tel.nr.">
            <input class="m-1" type="text" name="adr" value="" placeholder="Gatvė">
            <input class="m-1" type="text" name="miestas" value="" placeholder="Miestas">
            <input class="m-1" type="text" name="postal" value="" placeholder="Pašto kodas">
            <button class="btn-outline-info m-1" type="submit" onclick="">Koreguoti</button>
        </form>
    </section>
    <section class="pnlis m-2 row">
        <form class="p-2" action="model/del.zinutes.php" method="post">
            <h3>Peržiūrėti/trinti žinutes</h3>
            <select name="pasirinkimasKeturi" id="list-zinutes" class="listas" onchange="getZinutesFromDb()">
                <option selected>Pasirink žinutę</option>
            <?php   foreach($zinuciuObj as $uzsakym) { ?>
                    <option class="dropdn-value" value="<?=$uzsakym['id']?>"><?=$uzsakym['vardas']?> | <?=$uzsakym['email']?></option>
            <?php   } ?>
            </select>
            <button class="btn-outline-danger m-1" type="submit">Ištrinti</button>
            <ul id="ats4" class="list-group list-group-horizontal col d-flex align-items-stretch text-center flex-wrap"></ul>
        </form>
    </section>
</div>