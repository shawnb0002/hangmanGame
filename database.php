<?php

// remove before flight
ini_set('display_errors', 'on');

$host = 'localhost';
$username = 'root';
$password = 'mysql';
$connect = 'hangman';


try{

    $db = new PDO("mysql:dbname=$connect; host=$host", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
}catch(Exception $e){
    echo $e->getMessage();
    die(); 
}


?>

