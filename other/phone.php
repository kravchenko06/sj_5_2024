<div class="text1">
<?php
    $numbers = get_numbers();
  foreach ($numbers as $number): {?>
    <h1><?php echo $number["title"] ?></h1>
      <p><?php echo $number["number"] ?></p>
  <?php }endforeach;
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