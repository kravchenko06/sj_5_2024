<?php
  require 'mod\db.php';

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
      <ul class="main-menu" id="main-menu">
          <li><a href="index.php">Domov</a></li>
          <li><a href="O nas.php">O nás</a></li>
          <li><a href="Tickets.php">Vstupenky</a></li>
          <li><a href="kontakts.php">Kontakt</a></li>
      </ul>
      <a class="hamburger" id="hamburger">
          <i class="fa fa-bars"></i>
      </a>
    </nav>
  </header>