<?php

$dbhost = "localhost";
$dbname = "test";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

require_once('classes/Database.php');
require_once('classes/Menu.php');
require_once('classes/Slider.php');
require_once('classes/Index.php');
require_once('classes/O_nas.php');
require_once('classes/Tickets.php');
require_once('classes/Kontakts.php');