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
		

	?>

<form method="post">
quantité voulue <input type="text" name="quantity"  /></br>
<input type="hidden" name="product" value=<?php echo $_POST["product"] ?> >
<input type="hidden" name="num_cart" value="4"  >
<input type="submit" name="commande" >
</form>
</body>
</html>