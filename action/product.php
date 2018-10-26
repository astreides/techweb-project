	<?php 
	$reponse=$bdd->query('SELECT * FROM products WHERE name=\''.$_POST["product"].'\'');

	$donnees=$reponse->fetch();
	if( isset($_POST["quantity"]) ){
        $req = $bdd->query('INSERT INTO `order_products` (order_id, product_id, quantity, unit_price) VALUES (\''.$_POST["num_cart"].'\',\''.$donnees['id'].'\',\''.$_POST["quantity"].'\',\''.$donnees['unit_price'].'\')');

		
    }
	?>