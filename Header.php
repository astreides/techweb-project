<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<meta charset="utf-8" />
<log style="text-align:right">
<?php
function maFonctionlog(){
    if(isset($_SESSION["id"]) != NULL ){
		?><html>
	<form method="post">
	<input type="hidden" name="page" value="deco" >	
	<input type="submit" value="Deconnexion">
	</form></html>
	<?php }
    if(!isset($_SESSION["id"]) != NULL ){
    ?>
	<html>
	 <form name="affiche" method="post">
        login : <input type="text" name="login" />
        password : <input type="password" name="password" />
		<input type="hidden" name="page" value="co" >	
        <input type="submit" value="OK">
    </form>
	</html>
	   
	<?php 	}
		
	}
try{
    maFonctionlog();
} catch(Exception $e){

}  
?>

</log>
<header>
	<center>FurCuddle.com</center>
	<table>
<thead>
   
<form method="get">
	<input type="hidden" name="page" value="Accueil" >	
	<input type="submit" value="Menu">
</form>

<form method="get">
	<input type="hidden" name="page" value="Cart" >	
	<input type="submit" value="Panier">
</form>

<form method="get">
	<input type="hidden" name="page" value="account" >	
	<input type="submit" value="Nouveau compte">
</form>

<form method="get">
	<input type="hidden" name="page" value="listproducts" >	
	<input type="submit" value="Produits">
</form>
<?php
    if(isset($_SESSION["id"]) != NULL ){
		$currentUser=$bdd->query('select * from users WHERE users.id = \''.$_SESSION["id"].'\'');
		$user=$currentUser->fetch();
		if($user['isAdmin']==1){
	?>
<form method="get">
	<input type="hidden" name="page" value="admin" >	
	<input type="submit" value="Page Admin">
</form>
<?php
}}
?>
</thead> 
	</table>

	<lien style="text-align:right">
	</lien>
</header>
