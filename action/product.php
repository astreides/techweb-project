	<?php 
	//action
	if( isset($_POST["num_cart"]) ){
		$reponse=$bdd->query('SELECT * FROM products WHERE name=\''.$_POST["product"].'\'');
		$donnees=$reponse->fetch();
		
		
		if( isset($_POST["quantity"]) ){
			
			$req = $bdd->query('SELECT id from orders WHERE user_id =\''.$_SESSION["id"].'\' AND type="CART"');
			
			$truc = $req->fetch();
			
			$cart=$bdd->query('SELECT * FROM order_products WHERE product_id=\''.$donnees["id"].'\'AND order_id=\''.$truc["id"].'\'');
			$i =0;
			while($panier =$cart->fetch()){

				$req = $bdd->query('UPDATE `order_products` set `quantity`=  `quantity`+\''.$_POST["quantity"].'\' WHERE product_id =\''.$donnees["id"].'\'AND order_id=\''.$truc["id"].'\'');
				$i=1;
			}
			if($i==0){
				
				
				$req = $bdd->query('INSERT INTO `order_products` (order_id, product_id, quantity, unit_price) VALUES (\''.$truc["id"].'\',\''.$donnees['id'].'\',\''.$_POST["quantity"].'\',\''.$donnees['unit_price'].'\')');
			}   
		}
	}
	if( isset($_COOKIE[$_POST["product"]])){
		$temporary=$_COOKIE[$_POST["product"]];
		setcookie($_POST["product"],$temporary+1, time() + 600, null, null, false, true); 
	}
	else{
		setcookie($_POST["product"],1, time() + 600, null, null, false, true); 
	}
	?> 