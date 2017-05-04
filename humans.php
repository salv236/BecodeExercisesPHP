

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Hi <?php echo $_GET['name']; ?> </title>
</head>
<body>

<h1>  Hello</h1>

<form>

<input type="text" name="name" > Name:
<input type="submit" name="next">

 </form>

 <?php  $citation = "in code we trust"; ?>

 <blockquote>  <?php echo $citation; ?></blockquote>
	
</body>
</html>
