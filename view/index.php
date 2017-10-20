<?php
require_once('../model/database.php');
require_once('../controller/controllers.php');



foreach ($words as $word); 
$randomWord = $word['words'];


// using a $_SESSION to check if the word value has anything in it. 
// If it does not contain a word set a word to wordBeingUsed

session_start();

if(!isset($_SESSION['wordBeingUsed'])){
    
    $_SESSION['wordBeingUsed'] = $randomWord;
    
}else{
    
    $wordBeingUsed = $_SESSION['wordBeingUsed'];
    echo $wordBeingUsed;
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
                
				<h3><?php echo $_SESSION['wordBeingUsed'] ?></h3>


				<!--  <p>Amount of Guesses: 6</p>-->
				<p>Guesses Remaining: </p>
                <!-- <p>Previous Guesses:</p> -->





				<?php

                //Setting a session for a random number

                    if(!isset($_GET['randomNumber'])){          
                        $_SESSION['randomNumber'] = rand(6, 12);
                    }
                           
                    echo "<p>Amount of Guesses:". $_SESSION['randomNumber'] ."</p>";
                
                    

                //Getting all the past letters and storing them.

                    if (isset($_GET['letterHistory'],$_GET['characterGuessed'])){
                        $pastLettersGuessed = $_GET['letterHistory'] . $_GET['characterGuessed'];
                        //echo strlen($pastLettersGuessed);
                        echo "<p>Previous Guesses: ". $pastLettersGuessed. "</p>";
                       

                        $CurrentGuess = $_GET['characterGuessed'];
					    echo "<p>Current Letter Guessed:" . $CurrentGuess . "</p>";	
                    }            
                
                   

				?>

			</div>
		</div>

<!--  Form for all hidden input fields  -->

		<form name="buttonForm" method="get" action="../view/index.php" class="text-center letters">





        
			<!-- Hidden input fields -->
                <?php
                if (isset($_GET['letterHistory'])) {
                    echo "<input type='hidden' name='letterHistory' value='".$pastLettersGuessed."'>";
                }else{
                    echo "<input type='hidden' name='letterHistory' value=''>";
                }
              
            //Hidden input fields for a randome number from 6 - 12

                echo "<input type='hidden' name='randomNumber' value''>";
               


			?>



			<?php
				for ($i=1; $i <= 26 ; $i++) { 
                    $currentLetter = chr($i + 64); 
                    echo "<input type='submit' name='characterGuessed' value='" . $currentLetter . "'>";
                }
                
			?>
		</form>
       
    </body>
</html>