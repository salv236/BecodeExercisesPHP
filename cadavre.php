<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<style type="text/css">
	
.container {
	width:70%;
	margin:auto;
}

#name {
	margin-bottom:2%;
}

</style>

<body>

<div class="container">

		<?php $name = $_GET['name']; ?>
	<h1> <?php echo $name . $_GET['lastname'] . " aime la musculation "; ?></h1>

		<form method="get">

			<div>
			<label>  
				<input type="text" name="name" placeholder="name" id="name">
			</label>
			</div>

			<div>
			<label>  
				<input  type="text" name="lastname" placeholder="lastname" id="lastname">
			</label>
			</div>

			<input type="submit" name="submit">

			<h1> Concatenate 2 words <?php $nom = "jean"; $prenom = "claude";
								echo $nom . " " . $prenom; ?></h1>

		</form>

</div> <!--container-->
	
</body>
</html>