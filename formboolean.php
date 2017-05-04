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

		<?php
			$subject = (isset($_GET['subject']));
			$verbe = (isset($_GET['verb']));
			$compliment = (isset($_GET['compliment']));
			$homme = (isset($_GET['homme']));
			$femme = (isset($_GET['femme']));

		 ?>
	<h1> <?php echo $subject . " " . $verbe . " " . $compliment; ?> </h1>

		<form method="get">

			<div>
			<label>  
				<input type="text" name="subject" placeholder="subject" id="subject">
			</label>
			</div>

			<div>
			<label>  
				<input  type="text" name="verb" placeholder="verb" id="verb">
			</label>
			</div>

			<div>
			<label>  
				<input  type="text" name="compliment" placeholder="compliment" id="compliment">
			</label>
			</div>

			<div>

			<!--NOT WORKING TO REVIEW-->

			<?php if($homme == true){
				echo "t'es un vrai homme";
				} else{
					echo "t'est pas un homme";
					}?>
			<label> Homme: 
				<input  type="radio" name="homme" placeholder="sexe" id="compliment">
			</label>

			<label> Femme: <input  type="radio" name="femme" placeholder="sexe" id="compliment"></label>
			</div>

			<input type="submit" name="submit">


		</form>

</div> <!--container-->
	
</body>
</html>