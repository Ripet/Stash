<?php
    include_once('model/uzsakovas.php');
    $uzsakymuObj = getUzsakovus();
?>

<div class="tab-pane fade col" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    <section class="pnlis m-2 row">
        <form class="p-2" action="model/del.uzsakovas.php" method="post">
            <h3>Peržiūrėti/trinti užsakovą</h3>
            <select name="pasirinkimasTrys" id="list-uzsakovai" class="listas" onchange="getUzsakovusFromDb()">
                <option selected>Pasirink užsakovą</option>
            <?php   foreach($uzsakymuObj as $uzsakym) { ?>
                    <option class="dropdn-value" value="<?=$uzsakym['id']?>">ID: <?=$uzsakym['id']?>  <?=$uzsakym['vardas']?>  <?=$uzsakym['pavard']?></option>
            <?php   } ?>
            </select>
            <button class="btn-outline-danger" type="submit">Ištrinti užsakovą</button>
            <ul id="ats3" class="list-group list-group-horizontal col d-flex align-items-stretch text-center flex-wrap"></ul>
        </form>
    </section>
    <section class="pnlis m-2 row">
        <form class="p-2 col d-flex flex-column" action="model/create.uzsakovas.php" method="post">
            <h3>Pridėti užsakovą</h3>
            <input type="text" name="vard" value="" placeholder="Vardas">
            <input type="text" name="pavard" value="" placeholder="Pavardė">
            <input type="text" name="email" value="" placeholder="El.paštas">
            <input type="text" name="tel" value="" placeholder="Tel.nr.">
            <input type="text" name="adr" value="" placeholder="Gatvė">
            <input type="text" name="miestas" value="" placeholder="Miestas">
            <input type="text" name="postal" value="" placeholder="Pašto kodas">
            <button class="btn-outline-success" type="submit" onclick="">Pridėti užsakovą</button>
        </form>
        <form class="p-2 col d-flex flex-column" action="model/upd.uzsakovas.php" method="post">
            <h3>Koreguoti užsakovą</h3>
            <input type="text" name="pirkID" value="" placeholder="Užsakovo ID">
            <input type="text" name="vard" value="" placeholder="Vardas">
            <input type="text" name="pavard" value="" placeholder="Pavardė">
            <input type="text" name="email" value="" placeholder="El.paštas">
            <input type="text" name="tel" value="" placeholder="Tel.nr.">
            <input type="text" name="adr" value="" placeholder="Gatvė">
            <input type="text" name="miestas" value="" placeholder="Miestas">
            <input type="text" name="postal" value="" placeholder="Pašto kodas">
            <button class="btn-outline-info" type="submit" onclick="">Koreguoti užsakovą</button>
        </form>
    </section>
    
    <section class="pnlis m-2">
        <h3>Peržiūrėti/trinti žinutes</h3>
        
    </section>
</div>