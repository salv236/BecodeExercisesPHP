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
				<select name="country">
					<option value ="Canada"> Canada </option>
					<option value ="US"> US </option>
					<option value ="Italy"> Italy </option>
					<option value ="Germany"> Germany </option>
					<option value ="Ukraine"> Ukraine </option>
					<option value ="Czech Republic"> Czech Republic</option>
					<option value ="Bulgaria"> Bulgaria </option>
					<option value ="Japan"> Japan</option>
					<option value ="Spain"> Spain </option>
					<option value ="Croatia"> Croatia </option>
				</select>

		</div><!--container end-->

						<?php
						/*echo '<pre';
						var_dump($_GET);
						echo '</pre>'; */

						//'' - do not declare/show
						$country = (isset ($_GET['country']))?$_GET['country']:'';
						$output = (isset ($_GET['output']))?$_GET['output']:'';
						//var_dump(isset ($_GET['output']));
						?>

				<input type="text" name="output" value="<?php /*echo $country;*/ echo ' you have selected' . $country;?>"  >

				<input type="submit" name="submit" value="validate">

			</form>
		
	
</body>
</html>