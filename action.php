
<!DOCTYPE>

<html>
<head>
    <meta charset="iso-8859-1" />
    <title>result</title>
</head>
<body>
	login: <?php echo htmlspecialchars($_POST["nlogin"]); ?></br>
	password: <?php echo htmlspecialchars($_POST["npassword"]); ?></br>
	nom de ta maman: <?php echo htmlspecialchars($_POST["mama"]); ?></br>
	nom de ton papa: <?php echo htmlspecialchars($_POST["papa"]); ?></br>
	ton petit nom: <?php echo htmlspecialchars($_POST["name"]); ?></br>
	ta pitite adress: <?php echo htmlspecialchars($_POST["adress"]); ?></br>
	ton pitit 06: <?php echo (int)$_POST["tel"]; ?></br>
	ton age: <?php echo (int)$_POST["age"]; ?></br>
	<a href='Accueil'> Retour Menu</a>
<center><img src='images/bb ours.jpg'alt='T-shirts' width"500px"/></center>
<center><img src='images/bb tigre.jpg'alt='T-shirts' width"500px"/></center>
<center><img src='images/loutre.jpg'alt='T-shirts' width"500px"/></center>
</body>
</html>
