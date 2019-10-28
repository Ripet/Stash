<?php 
    include('header.php');
    include('model/prekes.php');
?>

<main class="row flex-row vezimelis">
    <form class="col" action="model/create.pirkinys.php" method="post">
        <div class="row">    
            <table id="prekiulentele" class="table table-striped">
                <tbody class="krepselio-konteineris">
        <?php   foreach($_COOKIE as $id => $name) {
                    $preke = getPreke($id); ?>    
                    <tr class="krepselio-eilute">
                        <th scope="row"><?=$preke['foto1']?></th>
                        <td><?=$preke['pavadinimas']?></td>
                        <td class="kaina"><?=$preke['kaina']?></td>
                        <td><input class="kiekis" name="kiekis" type="number" value="1"></td>
                        <td><button class="istrint-preke" type="submit" name="<?=$id?>" onclick="delCookie()">Pašalinti</button></td>
                    </tr>
                    <input type="hidden" name="prekesID" value="<?=$preke['id']?>">
        <?php   }  
                ?>
                </tbody>
            </table>
            <div class="totals">
                <span>Iš viso:</span>
                <input class="bendra-suma" type="number" step="0.01" name="total">
            </div>
        </div>
        <div class="col">
            <input class="m-1" type="text" name="vardas" value="" placeholder="Jūsų vardas">
            <input class="m-1" type="text" name="pavarde" value="" placeholder="Jūsų pavardė">
            <input class="m-1" type="text" name="email" value="" placeholder="Jūsų el. paštas">
            <input class="m-1" type="text" name="tel" value="" placeholder="Jūsų telefonas">
            <input class="m-1" type="text" name="adresas" value="" placeholder="Jūsų adresas">
            <input class="m-1" type="text" name="miestas" value="" placeholder="Jūsų miestas">
            <input class="m-1" type="text" name="pastkod" value="" placeholder="Jūsų pašto kodas">
            <button type="submit">Pirkti</button>
        </div>
    </form>
    <script>
        let krepseliokonteineris = document.getElementsByClassName('krepselio-konteineris')[0];
        let eilutes = krepseliokonteineris.getElementsByClassName('krepselio-eilute');
        let bendraPrekiuSuma = 0; 
        for (let i = 0; i < eilutes.length; i++) {
            let eilute = eilutes[i];
            let prekesKaina = eilute.getElementsByClassName('kaina')[0];
            let prekesKiekis = eilute.getElementsByClassName('kiekis')[0];
            let kaina = parseFloat(prekesKaina.innerText);
            let kiekis = prekesKiekis.value; 
            bendraPrekiuSuma += (kaina * kiekis);
        }
        bendraPrekiuSuma = Math.round(bendraPrekiuSuma * 100) / 100; 
        document.getElementsByClassName('bendra-suma')[0].value = bendraPrekiuSuma; 
    </script>    
</main>
<?php include('footer.php'); ?>