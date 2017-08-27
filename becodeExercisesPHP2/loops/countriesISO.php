<?php

//loop to generate html corresponding to a selectbox allowing a user to indicate his country in an html form.

$countries = array('BE' =>'Belgium', 
				   'RO' => 'Romania', 
				   'CA' => 'Canada', 
				   'USA' => 'US', 
				   'JP' => 'Japan', 
				   'ES' => 'Spain', 
				   'DE' => 'Germany', 
				   'CO' => 'Croatia', 
				   'CZ' => 'Prague');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form>
	<select name="countries"> 

	<?php
	// loop through the array insert ISO code between option tags
	 foreach($countries as $ISO => $nation){echo "<option value='nationality'> $ISO </option>";} ?>

	</select>
</form>

</body>
</html>