<!DOCTYPE>
<html>
<head>
    <meta charset="iso-8859-1" />
    <title>Cart</title>
</head>
<body>
    <?php include("Header.php") ?></br>
	le b�b� <?php echo htmlspecialchars($_POST["produits"]); ?> est un b�b� tout tout mignon, voulez vous le commandez?</br>
<form method="post" action="Cart.php">
<input type="submit" name="commande" value="ouiii">
</form>
</body>
</html>