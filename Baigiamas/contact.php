<?php include('header.php'); ?>
<main class="row">
    <form class="col" action="model/create.zinute.php" method="post">
        <textarea class="komentaro-laukas" name="komentaras" id="" cols="30" rows="30"></textarea>
        <input type="text" name="vardas" placeholder="Vardas/Slapyvardis">
        <input type="text" name="email" placeholder="El.Pašto adresas">
        <button class="" type="submit">Siųsti</button>
    </form>
</main>
<?php include('footer.php'); ?>