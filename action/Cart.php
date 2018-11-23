<?php 

$raq=$bdd->query('SELECT * FROM orders WHERE user_id=\''.$_SESSION["id"].'\' AND type = "CART"');
$riq=$raq->fetch();
if( isset($_POST["delete"]) ){
        $req = $bdd->query('DELETE FROM `order_products` WHERE order_id=\''.$riq["id"].'\' AND product_id=\''.$_POST["delete"].'\' ');

		
    }
if( isset($_POST["delete_all"]) ){
    $req = $bdd->query('DELETE FROM `order_products` WHERE order_id=\''.$riq["id"].'\'');
}
if( isset($_POST["validate_order"])){

}
//action ?>
