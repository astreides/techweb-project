<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<?php 
try{
$bdd = new PDO('mysql:host=localhost;dbname=dump;charset=utf8','root','');
}
catch(Exception $e)
{
		die('Erreur: ' . $e-getMessage());
}
?>

<log style="text-align:right">
    <form name="affiche" method="post" action="https://www.techno-web.fr/index.php">
        login : <input type="text" name="login" />
        password : <input type="text" name="password" />
        <input type="submit" value="OK">
    </form>
</log>
<header>
	<center>Site de vente.com</center>
	<a href='Accueil'><input type = "button" value="Menu"></a>
	<a href='Cart'> <input type = "button" value="Cart"></a>
	<a href='account.php'><input type = "button" value="Nouveau compte"></a>
	<a href='listproducts.php'> <input type = "button" value="Produits"></a>
	<lien style="text-align:right">
	</lien>
</header>
