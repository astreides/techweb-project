
<!DOCTYPE>

<html>
<head>
    <title>result</title>
</head>
<body>
	login: <?php echo htmlspecialchars($_POST["nlogin"]); ?></br>
	password: <?php echo htmlspecialchars($_POST["npassword"]); ?></br>
	nom: <?php echo htmlspecialchars($_POST["nom"]); ?></br>
	prenom: <?php echo htmlspecialchars($_POST["prenom"]); ?></br>
	ta pitite adresse: <?php echo htmlspecialchars($_POST["adresse"]); ?></br>
	ton pitit 06: <?php echo (int)$_POST["tel"]; ?></br>
	date de naissance: <?php echo (int)$_POST["age"]; ?></br>
	<form method="get" action="" >
	<input type="hidden" name="page" value="Accueil" >	
	<input type="submit" value="Menu">
</form>
<center><img src='images/bb ours.jpg'alt='T-shirts' width"500px"/></center>
<center><img src='images/bb tigre.jpg'alt='T-shirts' width"500px"/></center>
<center><img src='images/loutre.jpg'alt='T-shirts' width"500px"/></center>
</body>
</html>




