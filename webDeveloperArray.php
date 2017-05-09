<?php

//review seems that content is being replaced instead of inserting new values view array_push

$webDevelopment = array('frontend'=>array('backend'=>array( )));

echo '<pre>';
print_r($webDevelopment);
echo '</pre>';

$webDevelopment['frontend'] = 'xhtml';

echo '<pre>';
print_r($webDevelopment);
echo '</pre>';

$webDevelopment['backend'] = 'Ruby on Rails';

echo '<pre>';
print_r($webDevelopment);
echo '</pre>';

$webDevelopment['frontend']= ['html'];

echo '<pre>';
print_r($webDevelopment);
echo '</pre>';

$webDevelopment['frontend'] = 'css';

echo '<pre>';
print_r($webDevelopment);
echo '</pre>';

$webDevelopment['frontend'] = 'flash';

echo '<pre>';
print_r($webDevelopment);
echo '</pre>';

$webDevelopment['frontend'] = 'javascript';

echo '<pre>';
print_r($webDevelopment);
echo '</pre>';

// delete line containing flash

?>

