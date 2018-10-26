<!DOCTYPE>
<html>
<head>
    <meta charset="iso-8859-1" />
    <title>Cart</title>
</head>

	<?php
	function add_to_cart($id_cart, $id_item, $quantity, $price){
	if( !isset($_POST["quantity"]) ){
        throw new Exception("param est vide");
    }
		
		$req = $bdd->prepare('INSERT INTO `order_products` (order_id, product_id, quantity, unit_price) VALUES (:id_cart,:item,:quantity,:price)');
		$req->execute(array(
			'id_cart' => $id_cart,
			'item' => $id_item,
			'quantity' => $quantity,
			'price' => $price,
			));

	} ?>

<body>
    </br>
	<?php
	
	$reponse=$bdd->query('SELECT * FROM products WHERE name=\''.$_POST["product"].'\'');

	while ($donnees=$reponse->fetch()){
		?>
		<image src=<?php echo $donnees['lien_image'] ?> width="600px"></br>
		<?php
		echo $donnees['description']." ".$donnees['unit_price']." euros";
		
	}

	?>

<form method="post">
quantity voulue <input type="text" name="quantity"  /></br>
<input type="hidden" name="product" value=<?php echo $_POST["product"] ?> >
<input type="hidden" name="num_cart" value="4" ?> >
<input type="hidden" name="ids" value="$donnees['id']" ?> >
<input type="hidden" name="quantiter" value="quantity" ?> >
<input type="hidden" name="prix" value="$donnees['unit_price']" >
<input type="submit" name="commande" >
</form>
</body>
</html>