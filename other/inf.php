<div class="text1">   
    <?php
    $articles = get_articles();
  foreach ($articles as $article): {?>
    <h1><?php echo $article["title"] ?></h1>
      <p><?php echo $article["text"] ?></p>
  <?php }endforeach;
?>
</div> 