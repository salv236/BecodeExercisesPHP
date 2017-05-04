<?php 
echo '<pre>';
print_r($_GET);
echo '</pre>';

	/*	If the age is less than 12 years and the user answers "yes", returns: "Hello boy!" Or 		"Hello Girl!" According to its kind. 
		If the age is between 12 and 18 and the user answers "yes", displays "Hello Teenage boy!" Or "Hello Teenage girl!" According to its kind. 
		If the age is between 18 and 115 years and the user answers "yes", displays "Hello Sir!" Or "Hello Lady!" According to its kind. 
		If the age is more than 115 years and the user answers "yes", displays "Wow! Still alive, old man?" Or "old lady?" According to its kind. */

			$age = $_GET['age'];
			$language = $_GET['language'];
			$sex = $_GET['sex'];
			if ($age <12 && $sex ==true && $language == true ) {
				echo "Hi Small your sex is " .$sex . " and your age is " .$age . " You speak " .$language;
			} elseif($age >11 && $age <=18  && $sex ==true && $language ==true){ // age is between 12 and 18 years
				echo "Hi Teen your sex is " .$sex . " and your age is " .$age ." You speak " .$language;
			}elseif($age >18 && $age <=115 && $sex ==true && $language == true) { // age is between 18 and 115 years
				echo "Hi Adult your sex is " .$sex. " and your age is " .$age. " You speak " .$language;
			} elseif($age >115 && $sex == true && $language ==true){ // age is greater than  115
				echo "Wow! Always alive? your sex is " .$sex . " and your age is " .$age. " You speak " .$language;
			}
		
		?>