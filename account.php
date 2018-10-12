<!DOCTYPE>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<html>
<head>
    <meta charset="iso-8859-1" />
    <title>create account page</title>
</head>
<body>
<form method="post" ></br>
<a href='Accueil.php'><input type = "button" value=" Back to Menu"></a></br>
	mot de passe : <input type="password" name="nepassword" /></br>
	confirmation : <input type="password" name="validation" /></br>
 <input type="submit" value="OK" ></br>

</form>
<?php
function maFonction(){
    if( !isset($_POST["nepassword"]) ){
        throw new Exception("param est vide");
    }
   if(strcmp($_POST["nepassword"],$_POST["validation"]) == 0){
	?><html>
	<form method="post" action="action.php"></br>
	<input name="npassword" type="hidden" value="test">
<table border=6 cellspacing=12 cellpadding=20>
    <th>Pseudo : <input type="text" name="nlogin" /></br></th><tr>
    <th>nom : <input type="text" name="nom" /></br></th><tr>
    <th>prénom : <input type="text" name="prenom" /></br></th><tr>
    <th>adresse : <input type="text" name="adresse" /></br></th><tr>
    <th>numéro de péléphone : <input type="text" name="tel" /></br></th><tr>
	<th>date de naissance : <input type="text" name="age" /></br></th><tr>
    <th><input type="submit" value="OK"></br></th><tr>
</table>
	</form>
	</html>
	<?php	
		}
	}
 
try{
    maFonction();
} catch(Exception $e){

}	
?>
</body>
</html>
