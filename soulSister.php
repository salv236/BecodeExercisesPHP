<?php

$toi = array('bodybuilding', 'travelling', 'meditation');
$fil = array('dancing', 'singing', 'knitting', 'volleyball', 'travelling', 'meditation');

echo '<pre>';
print_r($toi);
echo '</pre>';

 $nous = array_merge($toi, $fil);

echo '<pre>';
print_r($nous);
echo '</pre>';

//array_intersect displays same value outputs in multiple arrays

$commonValues = array_intersect($toi, $fil);

echo '<pre>';
print_r($commonValues);
echo '</pre>';

?>

