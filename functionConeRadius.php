<?php

function volumeConeRadius(){
	$area = pow(5,2);
	$pi = 3.14;
	$height = 2;
	$radius = $pi * $height;
	$divide = 1/3;
	$total = $area * $radius * $divide;
	echo 'The volume of the cone if radius hight an height 2 is ' .$total . 'CM <sup> 3 </sup> <br>';
}

volumeConeRadius();




?>