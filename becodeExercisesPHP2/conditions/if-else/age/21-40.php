<?php

/*using the $ age and $ sex variables in an instruction if/elseto select a female person between the ages of 21 and 40 and display an appropriate welcome message.

Message if OK: "Hello, welcome to us!"
Message if KO: "Sorry, you do not meet the selection criteria.*/

$sex = 'female';
$age = 25;

if($age <= 21 && $sex =='female'){
	$message = 'Hello, Welcome to us!';
}

else{
	$message ='sorry you do not meet the selected criteria';
}

echo  $message;

if($age <= 21 && $sex =='female'){
	$message = 'Hello, Welcome to us!';
}

if($age >= 21 && $sex =='female'){
	$message = 'sorry you do not meet the selected criteria';
}

echo $message;