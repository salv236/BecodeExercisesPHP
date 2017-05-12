<?php

/*Creates a function that takes as argument a string (multiple words) and returns the initials of each word in uppercase. (Example: "In code we trust!"becomes:) ICWT.*/

function camelCase($string){
	$chanceCase = ucwords($string);
	echo $chanceCase . '<br>';
}
 camelCase('in code we trust');
 camelCase('read the fuckin manual');
 camelCase('do not repeat yourself');

?>