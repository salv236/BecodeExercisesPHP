<?php

//if one of the (or both) arguments sent is not a numeric value (int), the function returns the following message: "Error, non-numeric argument" .

function addition($num1, $num2){
	if(is_int($num1 && $num2)){
		$total = $num1 + $num2;
		echo $total;
	} else{
		 $upper = strtoupper('<strong>Error:</strong>');
		exit($upper . ' non-numeric argument');
		//var_dump($num1);
	} 

	
}

addition(5,7);



?>