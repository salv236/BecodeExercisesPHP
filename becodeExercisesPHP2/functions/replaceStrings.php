<?php

function replaceWord(){
	$words = array('caecotrophie', 'chaenichthys','microsphaera', 'sphaerotheca');

//get characters ae combination
 $newStrings = 'æ';
 // replace ae with æ
 

 echo '<pre>';
 var_dump(str_replace('ae', $newStrings, $words));
 echo '</pre>';

}

echo replaceWord();