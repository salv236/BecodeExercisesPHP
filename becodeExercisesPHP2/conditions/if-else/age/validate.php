<?php

/*If age is less than 12 years, displays "Hi small!"
If the age is between 12 and 18 years, poster "Hi teen!"
If the age is between 18 and 115 years, poster "Hi adult!"
If the age is over 115 years, displays "Wow! Always alive?"*/

$age = $_GET['age'];

if($age <12){
	echo 'Hi Small!';
}

if($age >= 12 && $age <= 18){
	echo 'Hi Teen!';
}

if($age > 18 && $age <= 115){
	echo 'Hi Adult';
}

if($age > 115){
	echo 'Wow!! Always alive?';
}