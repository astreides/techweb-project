<!DOCTYPE>

<html>
<head>
    <title>Create account page</title>
</head>

<body><?php
if(!isset($_POST["tprenom"])){?>
<form method="post" >
<table border=6 cellspacing=12 cellpadding=20>
    <th>Pseudo : <input type="text" name="tnlogin" /></br></th><tr>
    <th>mot de passe : <input type="password" name="nepassword" /></br></th><tr>
    <th>confirmation : <input type="password" name="validation" /></br></th><tr>
    <th>nom : <input type="text" name="tnom" /></br></th><tr>
    <th>prénom : <input type="text" name="tprenom" /></br></th><tr>
    <th>adresse : <input type="text" name="tadresse" /></br></th><tr>
	<th>mail : <input type="text" name="tmail" /></br></th><tr>
    <th>numéro de téléphone : <input type="text" name="ttel" /></br></th><tr>
    <th>date de naissance : <input type="text" name="tage" /></br></th><tr>
    <th><input type="submit" value="Vérifier"></form><form method="get" action="" >
	<input type="hidden" name="page" value="Accueil" >	
	<input type="submit" value="Menu">
</form></br></br></th><tr>
</table>


<?php
}
try{
    maFonction($bdd);
} catch(Exception $e){

}	
?>
</body>
</html>
