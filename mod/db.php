<?php

$dbhost = "localhost";
$dbname = "pj";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

function get_image_one(){
    global $db;
    $pictures1 = $db->query("SELECT * FROM image_one");
    return $pictures1;


}


function get_image_two(){
    global $db;
    $pictures2 = $db->query("SELECT * FROM image_two");
    return $pictures2;


}


function get_image_three(){
    global $db;
    $pictures3 = $db->query("SELECT * FROM image_three");
    return $pictures3;


}

function get_image_four(){
    global $db;
    $pictures4 = $db->query("SELECT * FROM image_four");
    return $pictures4;


}







function get_country(){
    global $db;
    $state = $db->query("SELECT * FROM states");
    return $state;


}


function get_articles(){
    global $db;
    $articles = $db->query("SELECT * FROM article");
    return $articles;


}


function get_numbers(){
    global $db;
    $numbers = $db->query("SELECT * FROM kont");
    return $numbers;


}

