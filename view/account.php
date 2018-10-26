<!DOCTYPE>

<html>
<head>
    <meta charset="iso-8859-1" />
    <title>create account page</title>
</head>
<?php
function maFonction(){
    if( !isset($_POST["nepassword"]) ){
        throw new Exception("param est vide");
    }
   if(strcmp($_POST["nepassword"],$_POST["validation"]) == 0){
	?><html>
	<form method="post" action="?page=action">
	<input type="hidden" name="nlogin" value=<?php echo $_POST["tnlogin"] ?> >
	<input type="hidden" name="npassword" value=<?php echo $_POST["nepassword"] ?> >
	<input type="hidden" name="nom" value=<?php echo $_POST["tnom"] ?> >
	<input type="hidden" name="prenom" value=<?php echo $_POST["tprenom"] ?> >
	<input type="hidden" name="adresse" value=<?php echo $_POST["tadresse"] ?> >
	<input type="hidden" name="tel" value=<?php echo $_POST["ttel"] ?> >
	<input type="hidden" name="age" value=<?php echo $_POST["tage"] ?> >
	<input type="submit" value="creer compte" >
	</form>
	</html>
	<?php	
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
    <th>numéro de péléphone : <input type="text" name="ttel" /></br></th><tr>
    <th>date de naissance : <input type="text" name="tage" /></br></th><tr>
    <th><input type="submit" value="Overifier"></form><form method="get" action="" >
	<input type="hidden" name="page" value="Accueil" >	
	<input type="submit" value="Menu">
</form></br></br></th><tr>
</table>


<?php
try{
    maFonction();
} catch(Exception $e){

}	
?>
</body>
</html>
