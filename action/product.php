	<?php 
	//action
	$reponse=$bdd->query('SELECT * FROM products WHERE name=\''.$_POST["product"].'\'');
	$donnees=$reponse->fetch();
	$requete='SELECT * FROM order_products WHERE product_id=\''.$donnees["id"].'\'';
	$cart=$bdd->query($requete);
	$i =0;
	if( isset($_POST["quantity"]) ){
		while($panier =$cart->fetch()){
			$req = $bdd->query('UPDATE `order_products` set `quantity`= `quantity`+\''.$_POST["quantity"].'\' WHERE product_id=\''.$donnees["id"].'\'AND order_id=4');
			$i=1;
		}
		if($i==0){
		$req = $bdd->query('INSERT INTO `order_products` (order_id, product_id, quantity, unit_price) VALUES (\''.$_POST["num_cart"].'\',\''.$donnees['id'].'\',\''.$_POST["quantity"].'\',\''.$donnees['unit_price'].'\')');
		}   
	}
	?>