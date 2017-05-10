<?php

//review seems that content is being replaced instead of inserting new values view array_push

/* Then adds a line below that adds the following technology to the right key: "xhtml".
Then adds a line below that adds the following technology to the right key: "Ruby on Rails".
Then adds a line below that adds the following technology to the right key: "CSS".
Then adds a line below that adds to the right key the following technology: "Flash".
Then adds a line below that adds to the right key the following technology: "Javascript".
Then add a line below that replaces the line containing "xhtml" with "html".
Then add a line below that deletes the line containing "Flash".*/

$frontEnd = [];
$backEnd = [];

echo '<pre>';
print_r($frontEnd);
echo '</pre>';

echo '<pre>';
print_r($backEnd);
echo '</pre>';

// addition of first element within the $frontEnd array

$frontEnd[0] = 'xhtml';

echo '<pre>';
print_r($frontEnd);
echo '</pre>';

echo '<pre>';
print_r($backEnd);
echo '</pre>';

array_push($backEnd,'Ruby on Rails');

echo '<pre>';
print_r($frontEnd);
echo '</pre>';

echo '<pre>';
print_r($backEnd);
echo '</pre>';

array_push($frontEnd, 'css');

echo '<pre>';
print_r($frontEnd);
echo '</pre>';

echo '<pre>';
print_r($backEnd);
echo '</pre>';

array_push($frontEnd, 'flash');

echo '<pre>';
print_r($frontEnd);
echo '</pre>';

echo '<pre>';
print_r($backEnd);
echo '</pre>';

array_push($frontEnd, 'javascript');

echo '<pre>';
print_r($frontEnd);
echo '</pre>';

echo '<pre>';
print_r($backEnd);
echo '</pre>';

//in array frontend replace xhtml with html

$frontEnd[0] = 'html';

echo '<pre>';
print_r($frontEnd);
echo '</pre>';

echo '<pre>';
print_r($backEnd);
echo '</pre>';

// delete entry containing flash in position[2] of the $frontEnd array

unset($frontEnd[2]);

echo '<pre>';
print_r($frontEnd);
echo '</pre>';

echo '<pre>';
print_r($backEnd);
echo '</pre>';

?>

