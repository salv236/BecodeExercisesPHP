<?php

$toi = array('bodybuilding', 'travelling', 'meditation');
$fil = array('dancing', 'singing', 'knitting', 'volleyball');

echo '<pre>';
print_r($toi);
echo '</pre>';

 $nous = array_merge($toi, $fil);

echo '<pre>';
print_r($nous);
echo '</pre>';
?>