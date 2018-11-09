<?php 

if( isset($_POST["delete"]) ){
		echo ($_POST["delete"]);
        $req = $bdd->query('DELETE FROM `order_products` WHERE order_id=4 AND product_id=\''.$_POST["delete"].'\' ');

		
    }
//action ?>
