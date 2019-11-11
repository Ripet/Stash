<?php 
    include('header.php');
    include_once('model/darbuotojai.php');
    $darbuotojuObj = getDarbuotojus();
?>
<main class="row flex-column">
    <div class="col-8 offset-2">
        <div class="row">
            <div class="col d-flex justify-content-center pt-4">
                <img class="apie-img shadow " src="img/woodwork.png" alt="medžio darbai">
            </div>
            <div class="col">
                <p class="apie p-3">Sveiki atvikę! Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ad odio amet suscipit a veritatis, pariatur repellat est ipsum 
                nostrum, quisquam placeat facere, inventore vitae doloremque? 
                Culpa animi cupiditate eligendi repellat! Lorem ipsum dolor sit amet 
                consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Rerum quis, soluta molestiae iure tempore quidem 
                laborum corporis dolore aliquam, ipsa sunt aspernatur aliquid suscipit 
                tenetur, minus omnis deserunt unde maxime. Lorem ipsum dolor sit amet 
                consectetur adipisicing elit. Fuga eum corrupti quas voluptate, repellendus 
                incidunt consectetur! Quidem officia obcaecati vero similique corrupti 
                laborum rem dolores molestiae mollitia? Voluptate, officiis labore.</p>
            </div>
        </div>
    </div>
    <div class="col-8 offset-2 my-2 py-2">
        <h2 class="musu d-flex justify-content-center m-3">Mūsų istorija</h2>
        <p class="apie p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Ad odio amet suscipit a veritatis, pariatur repellat est ipsum 
        nostrum, quisquam placeat facere, inventore vitae doloremque? 
        Culpa animi cupiditate eligendi repellat! Lorem ipsum dolor sit amet 
        consectetur adipisicing elit. Modi, non explicabo dolor odit sapiente 
        architecto nesciunt quo temporibus amet minus, blanditiis quos? Odit sunt, 
        animi corporis non provident laboriosam tenetur! Lorem ipsum dolor sit amet 
        consectetur, adipisicing elit. Tenetur eum, doloremque quisquam nam officiis 
        expedita corrupti, minima quia illo earum iste omnis perferendis optio, quam 
        nemo cupiditate aliquid molestiae ad!</p>
    </div>
    <div class="col-8 offset-2">
        <div class="row">
            <div class="col m-2 p-2">
                <h2 class="musu d-flex justify-content-center ">Mūsų komanda</h2>
            </div>
        </div>
        <div class="row d-flex flex-column">
    <?php   $i = 0;
            foreach($darbuotojuObj as $darb){ 
                if($i % 2 == 0){ ?>
                <div class="media col seselis">
                    <div class="row">
                        <div class="col-lg-3 my-3 py-3">
                            <img class="darbuotoju-foto d-flex align-self-center mr-3 mx-auto" src="<?=$darb['nuotrauka']?>" alt="Darbuotojo nuotrauka" width="200px">
                        </div>
                        <div class="media-body col my-3 py-3">
                            <h3 class=""><?=$darb['vardas']?> <?=$darb['pavarde']?></h3>
                            <p class="apie"><?=$darb['aprasymas']?></p>
                        </div>
                    </div>
                </div>
        <?php   $i++;
            } else { ?>
            <div class="media col seselis">
                <div class="row">
                    <div class="media-body col my-3 py-3">
                        <h3 class=""><?=$darb['vardas']?> <?=$darb['pavarde']?></h3>
                        <p class="apie"><?=$darb['aprasymas']?></p> 
                    </div>
                    <div class="col-lg-3 my-3 py-3">
                        <img class="darbuotoju-foto d-flex align-self-center ml-3 shadow mx-auto" src="<?=$darb['nuotrauka']?>" alt="Darbuotojo nuotrauka" width="200px">
                    </div>
                </div>
            </div>
        <?php $i++;
            }
        } ?>
        </div>
    </div>
</main>
<?php include('footer.php'); ?>