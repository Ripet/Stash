<?php include('header.php'); ?>
<main class="row flex-row vezimelis">
    <form>    
        <table class="table table-striped table-dark">
            <tbody class="krepselio-konteineris">
            <?php
        
        include('model/prekes.php');
        
        foreach($_COOKIE as $id => $name) {
            $preke = getPreke($id);
        ?>    <tr class="krepselio-eilute">
                <th scope="row"><?=$preke['foto1']?></th>
                <td><?=$preke['pavadinimas']?></td>
                <td class="kaina"><?=$preke['kaina']?></td>
                <td><input class="kiekis" type="number" value="1"></td>
                <td><button class="istrint-preke" type="submit" name="<?=$id?>" onclick="delCookie()">Pašalinti</button></td>
            </tr>
        <?php }  
            ?>
            </tbody>
            <div class="totals">
                <span>Iš viso:</span>
                <span class="bendra-suma">0 &euro;</span>
            </div>
            <button type="submit">Pirkti</button>
        </table>
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
        document.getElementsByClassName('bendra-suma')[0].innerText = bendraPrekiuSuma; 
    </script>    
</main>
<?php include('footer.php'); ?>