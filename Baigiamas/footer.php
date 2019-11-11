<?php
    include_once('model/kontaktai.php.');
    $kon = getKontaktus();
?>

</div>    
    <footer class="row footeris mt-5 p-2">
        <div class="col kontaktai d-flex justify-content-start align align-items-center">
            <ul class="list-unstyled adresas">
                <li><?=$kon['pavadinimas']?></li>
                <li><?=$kon['adresas']?></li>
                <li><?=$kon['pastokod']?></li>
                <li><?=$kon['tel']?></li>
                <li><?=$kon['bankSasNr']?></li>
            </ul>
        </div>
        <div class="col trade d-flex justify-content-center align-items-end">
            <p>&copy; Nekopyk, 2019, RP</p>
        </div>
        <div class="col d-flex justify-content-end align align-items-center ">
            <img class="social" src="img/facebook.svg" alt="mūsų facebook">
            <img class="social" src="img/twitter.svg" alt="mūsų twitter">
            <img class="social" src="img/pintrest.svg" alt="mūsų pintrest">
        </div>
    </footer>
    <script src="lib/jquery.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>