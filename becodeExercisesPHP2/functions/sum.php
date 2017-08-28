<?php

function sum($num1, $num2){

	
	error_reporting(0); // removes warings and error reporting from PHP config file

	$calculation = $num1 + $num2;

	// if the argumentsa re integer return the value and store it in memory
	if((int)$num1 && (int) $num2){
	return $calculation;
	}

	// if not an integer error message displayed
	else{
		 echo 'Error, non-numeric argument';
	}

	
}

echo sum(5, 30);