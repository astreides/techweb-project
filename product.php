<!DOCTYPE>
<html>
<head>
    <meta charset="iso-8859-1" />
    <title>Cart</title>
</head>
<body>
    <?php include("Header.php") ?></br>
	le bébé <?php echo htmlspecialchars($_POST["produits"]); ?> est un bébé tout tout mignon, voulez vous le commandez?</br>
<form method="post" action="Cart.php">
<input type="submit" name="commande" value="ouiii">
</form>
</body>
</html>