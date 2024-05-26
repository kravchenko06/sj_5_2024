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
      <ul id="accordion">
        <?php
          $tickets = new Tickets();
          echo($tickets->tickets());
        ?>
    </ul>
  </main>

    
    
<?php

require 'other\footer.php';

?>

<script src="js\app.js"></script>
</body>
</html>
