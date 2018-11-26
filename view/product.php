<!DOCTYPE>
<?php //view ?>
<html>


<body>

    </br>
	<?php
	
	$reponse=$bdd->query('SELECT * FROM products WHERE name=\''.$_POST["product"].'\'');

	$donnees=$reponse->fetch()
	?>
	<image src=<?php echo $donnees['lien_image'] ?> width="600px"></br>
	<?php
	echo $donnees['description']." ".$donnees['unit_price']." euros";
		
if( isset($_COOKIE[$_POST["product"]])){
		echo "\n ce produit a été vu tant de fois:";
		echo $_COOKIE[$_POST["product"]];
	}

if(isset($_SESSION["id"]) != NULL ){
	?>
<form method="post">
quantité voulue <input type="text" name="quantity"  /></br>
<input type="hidden" name="product" value=<?php echo $_POST["product"] ?> >
<input type="hidden" name="num_cart" value=<?php echo $_SESSION["id"] ?>  >
<input type="submit" name="commande" >
</form>
<?php
}
?>
</body>
</html>