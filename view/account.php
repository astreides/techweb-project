<!DOCTYPE>

<html>
<head>
    <title>Create account page</title>
</head>
<?php
function maFonction($bdd){
    if( !isset($_POST["nepassword"]) ){
        throw new Exception("param est vide");
    }
	$reponse=$bdd->query('SELECT * FROM users');
	$existant=0;
	while($donnees=$reponse->fetch()){
		if($_POST["tnlogin"]==$donnees["username"]){echo "login déjà utilisé  "; $existant=1;}
		if($_POST["tmail"]==$donnees["email"]){echo "email déjà attribuée  "; $existant=1;}
	}
	if((strcmp($_POST["nepassword"],$_POST["validation"]) == 0)&&($existant==0)){
	   if($_POST["nepassword"] != NULL){
		?><html>
		<form method="post" action="?page=action">
		<input type="hidden" name="nlogin" value=<?php echo $_POST["tnlogin"] ?> >
		<input type="hidden" name="npassword" value=<?php echo $_POST["nepassword"] ?> >
		<input type="hidden" name="nom" value=<?php echo $_POST["tnom"] ?> >
		<input type="hidden" name="prenom" value=<?php echo $_POST["tprenom"] ?> >
		<input type="hidden" name="adresse" value=<?php echo $_POST["tadresse"] ?> >
		<input type="hidden" name="mail" value=<?php echo $_POST["tmail"] ?> >
		<input type="hidden" name="tel" value=<?php echo $_POST["ttel"] ?> >
		<input type="hidden" name="age" value=<?php echo $_POST["tage"] ?> >
		<input type="submit" value="créer compte" >
		</form>
		</html>
	   <?php	}
		}
	}
?>




<body>
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
try{
    maFonction($bdd);
} catch(Exception $e){

}	
?>
</body>
</html>
