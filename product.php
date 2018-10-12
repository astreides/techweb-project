<!DOCTYPE>
<html>
<head>
    <meta charset="iso-8859-1" />
    <title>Cart</title>
</head>
<body>
    <?php include("Header.php") ?></br>
	<?php
	$reponse=$bdd->query('SELECT * FROM products');
	while ($donnees=$reponse->fetch()){
		if($_POST["produits"]==$donnees['name']){
			?>
			<image src=<?php echo $donnees['lien_image'] ?> width="600px"></br>
			<?php
			echo $donnees['description']." ".$donnees['unit_price']." euros";
		}
	}
	?>
<form method="post" action="Cart.php">
<input type="submit" name="commande" value="ouiii">
</form>
</body>
</html>