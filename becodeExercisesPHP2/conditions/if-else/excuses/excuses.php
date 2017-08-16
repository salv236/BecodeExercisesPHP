<?php

$disease = 'disease';
$bereavement = 'family bereavement';
$illness = 'illness';
$court = 'jury service';

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
		<form action="excuse-validator.php" method="get">
			<label> Name: </label> <br> <br>
			<input type="text" name="name"> <br> <br>

			<label> Teacher's Name: </label> <br> <br>
			<input type="text" name="teachName"> <br> <br>

			<label for="reason"> Reason for Absence </label> <br> <br>

			Disease <input type="radio" name="reason" value = <?php echo "$disease <br> <br>"; ?>
			Family Breavement <input type="radio" name="reason" value = <?php echo " $bereavement <br> <br>"; ?>
			illness <input type="radio" name="reason" value =  <?php echo "$illness <br> <br>"; ?>
			court <input type="radio" name="reason" value =  <?php echo "$court <br> <br>"; ?>

			<input type="submit" value="validate excuse!!!">
		</form>
		
	</body>
</html>