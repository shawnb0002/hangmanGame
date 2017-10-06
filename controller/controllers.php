<?php
require_once('../model/database.php');

try{
    $results = $db->query('SELECT * FROM hangmanGame');
}catch(Exception $e){
    echo $e->getMessage();
}

$words = ($results->fetchAll(PDO::FETCH_ASSOC));

shuffle($words);

$oneWord = array_splice($words,1);

?>