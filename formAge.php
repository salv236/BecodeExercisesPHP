<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="english.php" method="get">
		Age: <input type="number" placeholder="what is your age?" name="age">

		<label for="language"> Do you speak English? 

			Yes: <input type="radio" name="language" value="english" id="yes">
			No: <input type="radio" name="language" value="no English" id="no">
		</label>

			<!--<select name="language">
				<option value="english"> English</option>
				<option value="French"> French</option>
				<option value="Italian"> Italian</option>
				<option value="Dutch"> Dutch</option>
			</select> -->
		
		<label for="sex"> Specify your Gender: 
		 Male: <input type="radio" name="sex" value="male" id="male">
		Female: <input type="radio" name="sex" value="female" id="female"> </label>

		<input type="submit" name="submit" value="validate">

	</form>
	
</body>
</html>