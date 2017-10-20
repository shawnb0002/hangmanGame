<?php

$results = $db->query('SELECT * FROM hangmanGame');

$words = $results->fetchALL();



 shuffle($words);



 ?>