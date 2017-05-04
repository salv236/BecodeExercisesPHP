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

		
	<h1> <?php if(!empty($_GET)){
				$nom = $_GET['nom'];
				$excuse = $_GET['excuse'];
			 		echo "Chere madame " . $nom . " etait absente a cause de " .$excuse;
			 	}

			 	?>  </h1>

		<form method="get">

			<div>
				<label>  Nom:
					<input type="text" name="nom" placeholder="nom" id="nom">
				</label>
			</div>

			 	<h2> Raison d'absence</h2>

			 	<!--<label for="excuse"> Maladie: </label> -->
			 		<input type="radio" name="excuse" value="maladie" id="maladie"> Maladie:
			 	<input type="radio" name="excuse" value="vacances" id="vacances"> Vacances:
			 	<input type="radio" name="excuse" value="crise" id="crise"> Crise: 	
				

			<input type="submit" name="submit">


		</form>

</div> <!--container-->
	
</body>
</html>