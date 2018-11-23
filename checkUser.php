<?php 

$req=$bdd->query('SELECT * FROM users');
while($donnees=$req->fetch()){
if (isset($_COOKIE['id']) != NULL){
	$user=$_COOKIE['id'];
	$_SESSION["id"]= $user;
	$_SESSION["login"]=$donnees["username"] ;
	$_SESSION["password"]=$donnees["password"] ;}
else{
	
	setcookie('id',$donnees["id"], time() + 365*24*3600, null, null, false, true); }
}
?>