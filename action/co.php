
<?php
$user=0;
$req=$bdd->query('SELECT * FROM users');
while($donnees=$req->fetch()){
	if (($_POST["login"]==$donnees["username"])&&($_POST["password"]==$donnees["password"])) {$user=$donnees["id"];
	echo $user;
	}
}
if(($_POST["login"] != NULL) && ($_POST["password"] != NULL) && ($user!=0)){

$_SESSION["id"]= $user;
$_SESSION["login"]=$_POST["login"] ;
$_SESSION["password"]=$_POST["password"] ;
}
?>

