<?php
  require('mod/functions.php');

?>

<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <title>Mainsite</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
  <link rel="stylesheet" href="css\styles.css">
</head>
<body>
  <header class="container main-header">
      <div>
          <h1 class="logo">Dunajská liga</h1>
      </div>
    <nav class="main-nav">
      
      <?php
        $pages = array('Domov'=>'index.php',
                      'O nás'=>'o_nas.php',
                      'Vstupenky'=>'tickets.php',
                      'Kontakt'=>'kontakts.php');
        
        $menu = new Menu($pages);
        echo($menu->generate_menu());
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
          echo '<li><a href="logout.php" class="button">Log out</a></li>';
        } else {
          echo '<li><a href="login.php" class="button">Log in</a></li>';
          echo '<li><a href="register.php" class="button">Register</a></li>';
        }

      ?>
      <a class="hamburger" id="hamburger">
          <i class="fa fa-bars"></i>
      </a>
    </nav>
  </header>
