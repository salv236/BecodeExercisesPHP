<?php

/*Creates a random word generator, generating two words: one ranging from 1 to 5 letters, the other ranging from 7 to 15 letters. The screen will show only this: A title inviting the user to generate a new word, then: the two generated words, then: a button to refresh the page (and thus to recreate two words).*/

function randomWords(){
$words = array('servers', 'configuration');
//store position 0 and 1 into $random - $andom = key
$random = array_rand($words);
//$words = array_rand($words);
echo $words[$random];

}

randomWords();

?>