<?php

echo '<h1> looping using the while loop</h1>';

$no = 1;

while($no <= 120){
 echo $no . '<br>';
 $no++;
}

echo '<br>';

echo '<h1> looping using the for loop</h1>';

for ($value = 1; $value <= 120; $value++){
	echo $value . '<br>';
}