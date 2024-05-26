<?php

require 'other\header.php';

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
<?php
  $kontakts = new Kontakts();
  echo($kontakts->kontakts());
?>
      <div class="email-container">
        <h1>Môžete tiež používať našu poštu!(Also, you can use our mail!)</h1>
        <p>hotline@liga.com</p>
        <p>Describe your problem</p>
        
        <form action="#" method="post" id="helpForm">
            <label for="problemDescription"></label>
            <textarea id="problemDescription" name="problemDescription" rows="4" cols="50" required></textarea>
            
            <button type="submit">Send</button>
        </form>

  </main>

    
    
  <?php 
  
  require 'other\footer.php';
  
  ?>

<script src="js\app.js"></script>
</body>
</html>
