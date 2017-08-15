<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="UTF-8">
		<title> Hi </title>
	</head>
	<body>

	<h1> Hello </h1>

	<form>

	<input type="text" name="name" > Name:
	<input type="submit" name="next">

	 </form>

	 <?php if(!empty($_GET['name'])){
	 		$citation = $_GET['name'] . " in code we trust"; // onsubmit echos out the $_GET value 
	 		
	 	}

	 	?>

	 	<blockquote> <?php if(isset($citation)) {echo $citation;} // if the variable is initialized display data?>  </blockquote>
		
	</body>
</html>