<?php
require_once('../model/database.php');
require_once('../controller/controllers.php');



foreach ($words as $word); 
$randomWord = $word['words'];


// using a $_SESSION to check if the word value has anything in it. 
// If it does not contain a word set a word to wordBeingUsed

session_start();
// $wordBeingUsed = '';

if(!isset($_SESSION['wordBeingUsed'])){
    
    $_SESSION['wordBeingUsed'] = $randomWord;
    //echo $currentRandomWord;
    
}else{
    
    $wordBeingUsed = $_SESSION['wordBeingUsed'];
    //echo $wordBeingUsed;

}

$numberOfGesses = 6;

for($i = 0; $i <= $numberOfGesses; $i++ ){
    
}

//session_destroy();



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    
    <h1 class="text-center inh1">Hangman</h1>

		<div class="alert alert-primary" role="alert">
			<div class="text-center">
                <p>ANSWER: </p>
                
					<h3><?php echo $wordBeingUsed ?></h3>

				<p>Amount of Guesses: 6</p>
				<p>Guesses Remaining: </p>
                <p>Previous Guesses: </p>

				<?php
					if (isset($_GET['characterGuessed'])){
						$CurrentGuess[] = $_GET['characterGuessed'];
						echo "<p>Current Letter Guessed: " . $CurrentGuess . "</p>";		
                    }
                    
				?>

			</div>
		</div>

		<form name="buttonForm" method="get" action="../view/index.php" class="text-center letters">
			<!-- Hidden inputs -->
            <?php
                echo "<input type='hidden' name='currentWord' value'" . $wordBeingUsed ."'>";
                echo "<input type='hidden' name='pastLettersUsed' value'" .$wordBeingUsed."'>";
                echo "<input type='hidden' name='pastLettersUsed' value'" . $wordBeingUsed ."'>";
                

			?>

            <!--  -->
			<?php
				for ($i=1; $i <= 26 ; $i++) { 

                    $currentLetter = chr($i + 64); 
                    
					echo "<input type='submit' name='characterGuessed' value='" . $currentLetter . "'>";
				}
			?>
		</form>

    </body>
</html>