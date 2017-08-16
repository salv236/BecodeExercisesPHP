<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="UTF-8">
		<title>Age</title>
	</head>
	<body>

		<h1> Describe yourself!! </h1>

		<form action="validate.php" method="get">
			
			<label> Age: </label>
			<input type="text" name="age"> <br><br>

			<label for="sex"> Sex	</label> <br> <br>
			Male<input type="radio" name="sex" value="Male"> 
			Female<input type="radio" name="sex" value="Female">  <br> <br>

			<label> Do you Speak English?</label> <br> <br>
			Yes<input type="radio" name="english" value="yes">
			No<input type="radio" name="english" value="no"> <br> <br>

			<input type="submit" value="execute!!">
		</form>
		
	</body>

</html>