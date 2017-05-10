<?php

$persons = [' I ' , ' You ' , ' He / She ' , ' We ' , ' You ' , ' They / They '];

foreach($persons as $subject){

	if($subject==true){
		echo $subject . ' can code <br>';
	} else{
		echo $subject . ' cannot code <br>';
	}
}

?>
