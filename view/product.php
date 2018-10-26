<!DOCTYPE>
<html>
<head>
    <meta charset="iso-8859-1" />
    <title>Cart</title>
</head>

	

<body>

    </br>
	<?php
	
	$reponse=$bdd->query('SELECT * FROM products WHERE name=\''.$_POST["product"].'\'');

	$donnees=$reponse->fetch()
	?>
	<image src=<?php echo $donnees['lien_image'] ?> width="600px"></br>
	<?php
	echo $donnees['description']." ".$donnees['unit_price']." euros";
		
	
	if( isset($_POST["quantity"]) ){
        $req = $bdd->query('INSERT INTO `order_products` (order_id, product_id, quantity, unit_price) VALUES (\''.$_POST["num_cart"].'\',\''.$donnees['id'].'\',\''.$_POST["quantity"].'\',\''.$donnees['unit_price'].'\')');

		
    }
	?>

<form method="post">
quantity voulue <input type="text" name="quantity"  /></br>
<input type="hidden" name="product" value=<?php echo $_POST["product"] ?> >
<input type="hidden" name="num_cart" value="4"  >
<input type="submit" name="commande" >
</form>
</body>
</html>