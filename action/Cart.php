<?php 

if( isset($_POST["delete"]) ){
        $req = $bdd->query('DELETE FROM `order_products` WHERE order_id=4 AND product_id=\''.$_POST["delete"].'\' ');

		
    }
    if( isset($_POST["delete_all"]) ){
        $req = $bdd->query('DELETE FROM `order_products` WHERE order_id=\''.$_SESSION["id"].'\'');
    }
//action ?>
