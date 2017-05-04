<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Back to school</title>
</head>
<body>

<form action="schoolValidate.php" method="get">
	<label for="fullName"> Student Details </label> <br><br>
	Name: <input type="name" name="fName" value="fName" placeholder="insert first name">
	LastName:<input type="name" name="lName" value="lName" placeholder="insert last name">

	Grade:<input type="number" name="grade" min="1" max="20"> <br><br>

	<input type="submit" name="execute!">
</form>
	
</body>
</html>