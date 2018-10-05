
<!DOCTYPE>

<html>
<head>
    <meta charset="iso-8859-1" />
    <title>result</title>
</head>
<body>
	login: <?php echo htmlspecialchars($_POST["nom"]); ?></br>
	password: <?php echo (int)$_POST["age"]; ?>
</body>
</html>
