#ici verifier que le $_POST["login"] et que le $_POST["password"] soit correspondant avec la bdd et si oui faite rentrer dans le if
<?php
$user=0;
$req=$bdd->query('SELECT * FROM users');
while($donnees=$req->fetch()){
	if (($_POST["login"]==$donnees["username"])&&($_POST["password"]==$donnees["password"])) {$user=1;}
}
if(($_POST["login"] != NULL) && ($_POST["password"] != NULL) && ($user==1)){
$_SESSION["id"]= "5";
$_SESSION["login"]=$_POST["login"] ;
$_SESSION["password"]=$_POST["password"] ;
}
	
?>