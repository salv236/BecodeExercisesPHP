<?php

/*If age is less than 12 years, displays "Hi small!"
If the age is between 12 and 18 years, poster "Hi teen!"
If the age is between 18 and 115 years, poster "Hi adult!"
If the age is over 115 years, displays "Wow! Always alive?"*/

$age = $_GET['age'];
$sex = $_GET['sex'];
$language = $_GET['english'];

if($age <12 && $sex =='Male' && $language =='yes'){
	echo 'Hey Boy';
}

if($age <12 && $sex =='Female' && $language =='yes'){
	echo 'Hey Girl';
}

if($age >= 12 && $age <= 18 && $sex =='Male' && $language == 'yes'){
	echo 'Hello Teenager Boy';
}

if($age >= 12 && $age <= 18 && $sex =='Female' && $language == 'yes'){
	echo 'Hello Teenager Girl';
}

if($age > 18 && $age <= 115 && $sex =='Male' && $language =='yes'){
	echo 'Hello Sir';
}

if($age > 18 && $age <= 115 && $sex =='Female' && $language =='yes'){
	echo 'Hello Mme';
}

if($age > 115 && $sex =='Male' && $language =='yes'){
	echo 'Wow!! still alive old man?';
}

if($age > 115 && $sex =='Female' && $language =='yes'){
	echo 'Old Lady?';
}