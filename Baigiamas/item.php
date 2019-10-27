<?php

include('header.php');
include('model/prekes.php');

$gautapreke = getPreke($_GET['nr']);

?>
<main class="row flex-row">
    <section class="col">
        <img class="priekis" src="img/<?=$gautapreke['foto1']?>" width="40%">
        <img class="galas" src="img/<?=$gautapreke['foto2']?>" width="40%">
    </section>
    <section class="col">
        <div>
            <h1><?=$gautapreke['pavadinimas']?></h1>
            <p><?=$gautapreke['aprasymas']?></p>
            <p><?=$gautapreke['kaina']?> &euro;</p>
        </div>
        <button type="submit" class="sausainiam" name="<?=$gautapreke['id']?>" onclick="addCookie()">Įdėti į krepšelį</button>
    </section>
</main>
<?php include('footer.php'); ?>