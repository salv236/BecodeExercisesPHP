<?php 

/*If the age is less than 12 years and the user answers "yes", returns: "Hello boy!" Or "Hello Girl!" According to its kind. 
If the age is between 12 and 18 and the user answers "yes", displays "Hello Teenage boy!" Or "Hello Teenage girl!" According to its kind. 
If the age is between 18 and 115 years and the user answers "yes", displays "Hello Sir!" Or "Hello Lady!" According to its kind. 
If the age is more than 115 years and the user answers "yes", displays "Wow! Still alive, old man?" Or "old lady?" According to its kind. */

$age = $_GET['age'];
$language = $_GET['language'];
$sex = $_GET['sex'];

if($age <=12 && $sex == 'male'){
	echo 'hello ' .$sex; 
} elseif($age <=12 && $sex == 'female'){
	echo 'hello ' .$sex;
} elseif($age >=12 && $age <= 18 && $sex =='male'){
	echo 'hello Teenage boy!';
} elseif($age >=12 && $age <= 18 && $sex =='female'){
	echo 'hello Teenage girl!';
} elseif($age >=18 && $age<=115 && $sex == 'male'){
	echo 'Hello Sir!';
} elseif($age >=18 && $age <=115 && $sex == 'female'){
	echo 'Hello Lady!';
}  elseif($age >115 && $sex == 'male'){
	echo 'Wow! Still alive old man.';
} elseif ($age >115 && $sex =='female') {
	echo 'old lady';
} if($age >=21 && $age <=40 && $sex == 'female'){
	echo ' Hello welcome to us';
	/* if age is not greater than or equal to 21 and is not less
	than or equal to 40 */
} if($sex =='male' || ( $sex == 'female' && $age <=21) || ($sex =='female' && $age >40)){
	echo 'Sorry, you do not meet the selection criteria';
}

?>