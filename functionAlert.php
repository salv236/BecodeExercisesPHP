<?php

/* function allowing you to manage messages to the user with two arguments: the first argument is the message, the second argument specifies an attribute of html class that will be used by the CSS (eg "info", " Error "," warning "). Thanks to this function, we can write in php:*/

function broadcast($person, $message, $attrib){
	echo 'Hello ' . $person . ' you have an ' . $message . ' with value ' . $attrib . '.';
}
 broadcast('salvatore', 'error', 'href');

?>