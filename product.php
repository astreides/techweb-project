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
		try{
			$bdd = new PDO('mysql:host=localhost;dbname=dump;charset=utf8','root','');
		}
		catch(Exception $e)
		{
		die('Erreur: ' . $e-getMessage());
		}
		echo $id_cart;
		echo $id_item;
		echo $quantity;
		echo $price;
		$rep=$bdd->query('INSERT INTO `order_products` (order_id, product_id, quantity, unit_price) VALUES (4,4,4,4)') or die(print_r($bdd->errorInfo()));
	} ?>
<body>
    </br>
	<?php
	$reponse=$bdd->query('SELECT * FROM products WHERE name=\''.$_POST["produits"].'\'');
	while ($donnees=$reponse->fetch()){
		?>
		<image src=<?php echo $donnees['lien_image'] ?> width="600px"></br>
		<?php
		echo $donnees['description']." ".$donnees['unit_price']." euros";
		
	}

	?>

<form method="post" action=<?php add_to_cart(4, $donnees['id'] , 4, $donnees['unit_price'] ) ?> >
quantity voulue <input type="text" name="quantity" value="1" /></br>
<input type="submit" name="commande" value="click me">
</form>
</body>
</html>