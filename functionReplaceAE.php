<?php

/*Invent a function that replaces the letters "a" and "e" with the character "æ" in each of the following channels "caecotrophie", "chaenichthys","microsphaera", "sphaerotheca"*/

function replaceAE(){
	$replaceChars = array('caecotrophie', 'chaenichthys','microsphaera', 'sphaerotheca');
	foreach($replaceChars as $word){
		$replace = str_replace('ae', 'æ', $word);
		echo $replace . '<br>';
		$replace = str_replace('æ', 'ae', $word);
		echo $replace . '<br>';
	}
}

replaceAE();

/*function inverse(){
	global $replaceChars;
	global $word;
	global $replace;
	$replace = str_replace('æ', 'ae', $word);
	echo $replace;
}

inverse(); */


?>