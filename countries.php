<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Countries</title>

		<style>

		.container{
			width:70%;
			margin:auto;
		}

		input{
			margin-left:19.25%;
			margin-top:1.5%;
		}	

		</style>
		
	</head>
	<body>

		<div class="container">
			<form action="#" method="get">
				<h1> Select your Country</h1>

				<label> Country:</label>

			<?php

			$nom_pays = array('UG'=>'Ouganda','IR'=>'Irlande','CH'=>'Suisse', 'LX'=>'Luxembourg', 'S'=>'Singapour', 'US'=>'USA', 'AU'=>'Australie', 'CA'=>'Canada', 'FR'=>'France', 'BE'=>'Belgique');

			$nom_pays['CH'];

			echo "<select>";
			foreach ($nom_pays as $key=>$pays){
			//  inside value shows content in the dropdown form within the variable $pays
				// pays = counry key = iso
			echo '<option value ="' .$pays . '">' .$pays . '</option>';

			}

			echo "</select>";

			?>

		</div><!--container end-->

				<!--<input type="text" name="output">-->

				<input type="submit" name="submit" value="validate">

			</form>	
	
</body>
</html>