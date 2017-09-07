<?php

/*Creates a function allowing you to manage messages to the user with two arguments: the first argument is the message, the second argument specifies an attribute of html class that will be used by the CSS (eg "info", " Error "," warning "). Thanks to this function, we can write in php:
Echo feedback ( " incorrect e-mail address " , " warning " );

Which will cause this injection of html:

<div  class = "warning"> Invalid email address. </div>*/

function displayHtml(){ // think how we can implement a function in this case with 2 arguments
	$html = '<div class = "warning"> Invalid email address. </div>';
	return $html;

	//$alert = $message  + $attribute;

   }

 displayHtml();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php echo displayHtml();?>
	
</body>
</html>