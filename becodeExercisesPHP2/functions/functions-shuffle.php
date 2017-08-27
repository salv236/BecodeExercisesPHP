<?php

// shuffle words within an array

function shuffleString($word){
	$string = str_shuffle($word);
	return $string;
}

echo shuffleString('bseball');