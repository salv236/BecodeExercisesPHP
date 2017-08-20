<?php

$myArray = ['noodling', 'baseball', 'boxing', 'karate', 'travel'];
echo '<pre>';
//print_r($myArray);
//array source + starting point  + how many entries to delete from the array counting form the starting point
array_splice($myArray, 4,0, 'hockey'); 
print_r($myArray);

array_splice($myArray, 1,4, 'hockey');
print_r($myArray);