<?php

function replaceWord(){
	$words = array('caecotrophie', 'chaenichthys','microsphaera', 'sphaerotheca');

 $conversion = implode(',', $words); // converts an array to strings
//get characters ae combination
 // $getLetters = strpos($conversion, 'ae');
 // echo $getLetters;
 // $newStrings = array('æ');
 $newStrings = 'æ';
 // replace ae with æ
 $replacechars = substr_replace($words, 'ae', $newStrings, 2);

 echo '<pre>';
 var_dump(str_replace('ae', $newStrings, $words));
 echo '</pre>';

}

echo replaceWord();