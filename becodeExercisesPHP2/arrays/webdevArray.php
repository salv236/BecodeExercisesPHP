<?php

// multidemsional array

$webdevelopment = array(
	'frontend' => array('xhtml', 'css', 'flash', 'javascript'),
	'backend' => array('backend', 'Ruby on Rails')
	);

array_splice($webdevelopment['frontend'], 2, 1); // remove flash from the array

echo '<pre>';
print_r($webdevelopment);

echo '<br>';

//STANDARD ARRAY

// replace the value xhtml with html within the array frontend
// $webdevelopment['xhtml'] = 'html';

// echo '<pre>';
// print_r($webdevelopment); 

/*$frontend = array('xhtml', 'css', 'flash', 'javascript');
$backend = array('Ruby on Rails');

$frontend[0] = 'html';  // replace xhtml with html

echo '<pre>';
print_r($frontend); */




