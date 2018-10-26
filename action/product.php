	<?php 
	//action
	$reponse=$bdd->query('SELECT * FROM products WHERE name=\''.$_POST["product"].'\'');

	$donnees=$reponse->fetch();
	if( isset($_POST["quantity"]) ){
		
        $req = $bdd->prepare('INSERT INTO `order_products` (order_id, product_id, quantity, unit_price) VALUES (:id_cart,:item,:quantity,:price)');
		$req->execute(array(
			'id_cart' => $_POST["num_cart"],
			'item' => $donnees['id'],
			'quantity' => $_POST["quantity"],
			'price' => $donnees['unit_price'],
			));
		
    }
	?>