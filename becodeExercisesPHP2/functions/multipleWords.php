<?php

//function that takes as argument a string (multiple words) and returns the initials of each word in uppercase. 

// function multipleWords($char1){
// 	$string = ucfirst($char1);
// 	$array1 = str_split($string);
// 	echo '<pre>';
// 	var_dump($array1);
// 	//return $string;
// }

// echo multipleWords('in code we trust');

function multipleWords($char){
 	$string = explode(' ', $char); // returns each word in its own array of strings
 	echo '<pre>';
 	print_r($string);
 	 	foreach($string as $word) {
    var_dump($word);
    // ubstr($word, 0, 1) gets the first letter of the word first word
    //echo strtoupper(substr($word, 0, 1)); 
	 	 };
}
 	 multipleWords('In Code We Trust');