<?php

$family = array(0 => 'giuseppe', 1=> 'Rosina', 2 => 'rosa', 3 => 'me', 4 => 'Giusy', 5 => 'Fabrizio');

print_r($family);
echo '<br><br>';

$cuisine = ['sushi', 'okonomiyaki', 'tonkatsu', 'couscous', 'spaghetti'];

print_r($cuisine);
echo '<br><br>';

$tv = ['2 broke girls', 'a team', 'house of cards', 'eastenders', 'question time'];

print_r($tv);
echo '<br><br>';
echo "my favorite show is " . $tv[0];

echo '<br>';

// how array output of array $cusine

foreach($cuisine as $dish){
//echo $dish .'<br>';

}

echo $cuisine[4];

echo '<br>';

// add an entry to an array at last position

array_push($cuisine, 'torayaki');

print_r($cuisine);



?>