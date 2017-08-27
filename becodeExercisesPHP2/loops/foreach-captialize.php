<?php

$professions = array('doctor', 'nurse', 'assassin', 'carpenter', 'welder', 'electrician', 'plumber');

foreach($professions as $job){
	echo strtoupper($job). '<br>';
}

echo '<br>';

$profile = array('name' => 'salvatore', 'age' => 39, 'profession' => 'web developper', 'specialization' => 'backend');

foreach($profile as $attribute => $info){
	echo ucfirst($info) . '<br>';
}

echo '<br>';

echo '<h1> Verb Conjugation </h1>';

$Pronouns  =array( ' I ' , ' You ' , ' He / She ' , ' We ' , ' You ' , ' They / They ' );

foreach($Pronouns as $person){
	echo $person . 'loves PHP<br>';
}

