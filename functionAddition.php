<?php

//if one of the (or both) arguments sent is not a numeric value (int), the function returns the following message: "Error, non-numeric argument" .

function addition($num1, $num2){
		$total = $num1 + $num2;
		echo $total;
		//var_dump($num1);
		if(is_numeric($num1) && is_numeric($num2)){
			echo $num1 . ' and' .$num2 . ' are integers';

		} else{

		 $upper = strtoupper('<strong>Error:</strong>'); // converts all characters uppercase
		echo $upper . ' non-numeric argument';
		}
	
}

addition(5,7);
// .'<br>';

?>