<?php
function maFonction($bdd){
    if( !isset($_POST["nepassword"]) ){
        throw new Exception("param est vide");
    }
	$reponse=$bdd->query('SELECT * FROM users');
	$existant=0;
	while($donnees=$reponse->fetch()){
		if($_POST["tnlogin"]==$donnees["username"]){echo "login déjà utilisé.  "; $existant=1;}
		if($_POST["tmail"]==$donnees["email"]){echo "email déjà attribué.  "; $existant=1;}
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