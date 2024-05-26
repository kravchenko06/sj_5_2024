
<?php
  require 'other/header.php';

?>

  
  <main>

  <section class="slides-container">
      <?php
        $slider = new Slider();
        echo($slider->slider());
      ?>
      
      <a id="prev" class="prev">❮</a>
      <a id="next" class="next">❯</a>
      
    </section>


    <div class="text1">
      <h1>"Dunajská liga"</h1>
      <p>Dunajská liga - Spoločnosť sa špecializuje na zájazdy a cestovanie v strednej Európe. A tiež vďaka rozšíreniu našej spoločnosti sme dostali možnosť získať bunky na Ukrajine a v Poľsku. Našou úlohou je pomáhať turistom pri cestovaní a radiť im, aké mestá a pamiatky si majú pozrieť. A mnoho ďalších rôznych tipov na cestovanie a iné veci.</p>
      <h1>Informácie</h1>
      <p>A mnoho ďalších rôznych tipov na cestovanie a iné veci. V každej krajine je tiež telefónne číslo na našich zamestnancov. Ktoré môžu našim zákazníkom pomôcť položiť otázky a zistiť, čo potrebujú. Rešpektujeme našich zákazníkov, ale žiadame, aby aj oni rešpektovali našich zamestnancov.Všetky rozhovory sa nahrávajú, takže si môžete byť istí, že ak sa náš zamestnanec správa nekompetentne alebo zákazník prekračuje svoje práva. S takýmito prípadmi máme skúsenosti.</p>
    </div>
  </main>

  <div class="text3">
            <?php
              $index = new Index();
              echo($index->index());
            ?>
    </div> 

  <?php 
  
  require 'other\footer.php';
  
  ?>

<script src="js\app.js"></script>
</body>
</html>
