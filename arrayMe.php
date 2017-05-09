<?php

//an associative array about me

/*$aboutMe = array('name'=>'salvatore', 'likesFootball'=>false, 'age'=>38, 'papa'=>'$papa', 
	'father'=>array('name'=>'Giuseppe', 'lastname'=>'saia', 'age'=> 75, 'passion'=>'food', 'family'=>array('dad'=>'giuseppe', 'mum'=>'rosina', 'sister'=>'RosaMaria', 'author'=>'Salvatore') )); */

$me = array(
			'personality'=>array
							('name'=>'salvatore', 'likesFootball'=>false, 'age'=>38, 
								'dad'=>array('name'=>'Joe', 'lastname'=>'bloggs', 'age'=>75, 'passion'=>'golf')));

echo '<pre>';
print_r($me);
echo '</pre><br>';
echo $me['personality']['dad']['age'].'<br>';
echo 'my father has ' . count($me['personality']['dad']) . ' attributes' .'<br>';
//echo 'I am'

?>