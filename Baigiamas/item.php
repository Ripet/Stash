<?php

include('header.php');
include('model/prekes.php');

$gautapreke = getPreke($_GET['nr']);

?>
<main class="row flex-row">
    <section class="col prekes-img m-5 p-3">
        <img class="priekis m-5" src="img/<?=$gautapreke['foto1']?>" width="60%">
        <img class="galas m-5" src="img/<?=$gautapreke['foto2']?>" width="60%">
    </section>
    <section class="col d-flex flex-column justify-content-around m-5 p-3">
            <h1><?=$gautapreke['pavadinimas']?></h1>
            <p><?=$gautapreke['aprasymas']?></p>
            <p><?=$gautapreke['kaina']?> &euro;</p>
        <button type="submit" class="sausainiam store-item w-50" name="<?=$gautapreke['id']?>" onclick="addCookie()">Įdėti į krepšelį</button>
    </section>
</main>
<?php include('footer.php'); ?>