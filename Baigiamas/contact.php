<?php include('header.php'); ?>
<main class="row">
    <form class="p-2 col-6 offset-3 d-flex flex-column" action="model/create.zinute.php" method="post">
        <h2 class="musu d-flex justify-content-center m-2">Laukiame Jūsų klausimų ir pasiūlymų</h2>
        <textarea class="m-1" class="komentaro-laukas" name="komentaras" id="" cols="10" rows="25"></textarea>
        <input class="m-1" type="text" name="vardas" placeholder="Vardas/Slapyvardis">
        <input class="m-1" type="text" name="email" placeholder="El.Pašto adresas">
        <button class="m-1" type="submit">Siųsti</button>
    </form>
</main>
<?php include('footer.php'); ?>