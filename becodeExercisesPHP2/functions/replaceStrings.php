<?php

//  letters "a" and "e" with the character "æ

// $words = array('caecotrophie', 'chaenichthys','microsphaera', 'sphaerotheca');

// $target = 'æ';

// $words[0] = 'cæcotrophie';
// $words[1] = 'chænichthys';
// $words[2] = 'microsphæra';
// $words[3] = 'sphærotheca';

// echo '<pre>';
// print_r($words);

function replaceWord($string){
	$words = array('caecotrophie', 'chaenichthys','microsphaera', 'sphaerotheca');

//get characters a and e consecutively
 $getLetters = strpos($string, 'ae');
 $replacechars = substr_replace('ae', $getLetters, 0);
 echo $replacechars;

//

// echo '<pre>';
  // print_r($words);
}

echo replaceWord();