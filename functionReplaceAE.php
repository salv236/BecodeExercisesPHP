<?php

/*Invent a function that replaces the letters "a" and "e" with the character "æ" in each of the following channels "caecotrophie", "chaenichthys","microsphaera", "sphaerotheca"*/

function replaceAE(){
	$replaceChars = array('caecotrophie', 'chaenichthys','microsphaera', 'sphaerotheca');
	foreach($replaceChars as $word){
		echo $word. '<br>';
	}
}

replaceAE();


?>