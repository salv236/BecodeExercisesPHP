
<?php
//loop to generate html corresponding to a selectbox allowing a user to indicate his country in an html form.

$countries = array('Belgium', 'Romania', 'Canada', 'US', 'Japan', 'Spain', 'Germany', 'Croatia', 'Prague');

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form>
	<select name="countries">

	<?php foreach($countries as $state){echo "<option> $state </option>";} ?>
		
	</select>
</form>

</body>
</html>