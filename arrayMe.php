<?php

//an associative array about me

/*$aboutMe = array('name'=>'salvatore', 'likesFootball'=>false, 'age'=>38, 'papa'=>'$papa', 
	'father'=>array('name'=>'Giuseppe', 'lastname'=>'saia', 'age'=> 75, 'passion'=>'food', 'family'=>array('dad'=>'giuseppe', 'mum'=>'rosina', 'sister'=>'RosaMaria', 'author'=>'Salvatore') )); */

$me = array(
			'personality'=>array
							('name'=>'salvatore', 'lastname'=>'saia', 'likesFootball'=>false, 'age'=>38, 
								'dad'=>array('name'=>'Joe', 'lastname'=>'bloggs', 'age'=>75, 'passion'=>'golf')));

echo '<pre>';
print_r($me);
echo '</pre><br>';
echo $me['personality']['dad']['age'].'<br>';
echo 'my father has ' . count($me['personality']['dad']) . ' attributes' .'<br>';
//echo 'I am'
echo 'then number of qualities that i possess is ' . count($me['personality']) . '<br>';

$dad = count($me['personality']['dad']);
$myValue = count($me['personality']);

$total = $dad + $myValue;

echo $total; 

// is it possible to use array push to add an entry within an associative array?
//array_push($me['personality'], 'hobby1'=>'Taxidermy');


// arrayname[key] = value
$me['personality']['hobby1'] ='taxidermy';

echo '<pre>';
print_r($me);
echo '</pre><br>';

//replace in array the key age from 38 to 18
$me['personality']['age'] = 18;

echo '<pre>';
print_r($me);
echo '</pre><br>';

$me['personality']['lastname'] = 'Dieudonné';

echo '<pre>';
print_r($me);
echo '</pre><br>';


?>