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
			echo $donnees['description'];
		}
	}
	?>
<form method="post" action="Cart.php">
<input type="submit" name="commande" value="ouiii">
</form>
</body>
</html>