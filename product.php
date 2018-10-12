<!DOCTYPE>
<html>
<head>
    <meta charset="iso-8859-1" />
    <title>Cart</title>
</head>
<body>
    <?php include("Header.php") ?></br>
	<?php
	$reponse=$bdd->query('SELECT * FROM products WHERE name=\''.$_POST["produits"].'\'');
	while ($donnees=$reponse->fetch()){
		?>
		<image src=<?php echo $donnees['lien_image'] ?> width="600px"></br>
		<?php
		echo $donnees['description']." ".$donnees['unit_price']." euros";
		
	}
	?>
<form method="post" action="Cart.php">
quantiter voulue <input type="text" name="quantity" value="1" /></br>
<input type="submit" name="commande" value="click me">
</form>
</body>
</html>