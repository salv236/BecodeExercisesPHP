<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php $prenom = $_GET['prenom']; ?>
<?php //$aime = "frites"; ?>

<h1>Salut <?php echo $prenom; ?> Cha Va! </h1> 
<?php

//on change la valeur de la variable

$prenom = "Marie-Chantale" ; ?>

<?php //get the value and replace with aime = word1+word2
 $aime = $_GET['aime']; ?>

<h1>Salut <?php echo $prenom; ?> !Cha Va?</h1>
<p> Il Parait que to adooores <?php echo $aime; ?> , C'est vrai?</p>

<h2> Subtitile </h2>
	
</body>
</html>