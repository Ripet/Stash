<?php include('header.php'); ?>
<main class="row flex-row">
    <?php
        include('model/prekes.php');

        $visuPrek_obj = getPrekes();
        
        while($preke = mysqli_fetch_assoc($visuPrek_obj)) {?>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card">
                    <a class="store-pic" href="item.php?nr=<?=$preke['id']?>" class="btn btn-primary"><img class="card-img-top" src="img/<?=$preke['foto1']?>" alt="Card image cap"></a>
                    <div class="card-body">
                        <h4 class="card-title"><?=$preke['pavadinimas']?></h4>
                        <p class="card-text"><?=$preke['kaina']?> &euro;</p>
                    </div>
                </div>
            </div>
        <?php
        }
    ?>
</main>
<?php include('footer.php'); ?>