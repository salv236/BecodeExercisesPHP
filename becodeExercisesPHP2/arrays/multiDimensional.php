<?php

$me = array('firstname' => 'salvatore', 'lastname' => 'saia', 'age' => 39, 'status' => 'single',  'profession' => 'web developer', 'married' => false,
	'sister' => array('age' => 36, 'firstname' => 'rosa', 'lastname' => 'saia', 'profession' => 'teacher', 'hobby' => 'driving')

	);

// echo '<pre>';
// print_r($me);
// echo '<br>';

// echo $me['sister']['profession'];
// echo '<br>';

// echo count($me);

$me['hobby'] = ['taxonomy']; // inserts key and value within an associative array

echo '<pre>';
print_r($me);
echo '<br>';

print_r($me['hobby']);

array_push();

print_r($me);

echo '<br>';

$me['lastname'] = 'corleone'; // replace value within an associative array

print_r($me);

echo '<br>';

$me['sister']['age'] = 33; // replace age of sister from 36 to 33

print_r($me);