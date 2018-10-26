<!DOCTYPE>
<html>
<head>
    <meta charset="iso-8859-1" />
    <title>Cart</title>
</head>
<?php include("Header.php") ?>
	<?php
	function add_to_cart($id_cart, $id_item, $quantity, $price)
	{	
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
	
	$reponse=$bdd->query('SELECT * FROM products WHERE name=\''.$_POST["product"].'\''))

	while ($donnees=$reponse->fetch()){
		?>
		<image src=<?php echo $donnees['lien_image'] ?> width="600px"></br>
		<?php
		echo $donnees['description']." ".$donnees['unit_price']." euros";
		
	}

	?>

<form>
quantity voulue <input type="text" name="quantity" value="1" /></br>
<input type="submit" name="commande" value="click me" onclick="add_to_cart(4, $donnees['id'] , quantity, $donnees['unit_price'] )">
</form>
</body>
</html>