<?php

function firstUpper(){
 $string = 'testcase';
 echo ucfirst($string).'<br';
}

firstUpper().'<br>';

function year(){
 $currentYear = date('Y');
 echo $currentYear;
}

year();


?>