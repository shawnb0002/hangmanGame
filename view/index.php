<?php
// require_once('../style.css');
require_once('../model/database.php');
require_once('../controller/controllers.php');


// try{
//     $results = $db->query('SELECT * FROM hangmanGame');
// }catch(Exception $e){
//     echo $e->getMessage();
// }

// $words = ($results->fetchAll(PDO::FETCH_ASSOC));

// shuffle($words);

// $oneWord = array_splice($words,1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Hangman</title>
</head>
<body>
    

<ul>
    <?php foreach($words as $word)?>

    <li class="wordStyle"> <?php echo $word["words"];?> </li>

</ul>
    
</body>
</html>