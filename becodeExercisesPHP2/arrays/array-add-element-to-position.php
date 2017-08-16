<?php

$myArray = ['noodling', 'baseball', 'boxing', 'karate', 'travel'];
echo '<pre>';
//print_r($myArray);
array_splice($myArray, 4,0, 'hockey');
print_r($myArray);