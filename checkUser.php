<?php 

$req=$bdd->query('SELECT * FROM users');
while($donnees=$req->fetch()){
	if (isset($_COOKIE['id']) != NULL){	
		if(($donnees['id'])==($_COOKIE['id'])){
			$_SESSION["login"]=$donnees["username"] ;
			$_SESSION["password"]=$donnees["password"] ;
		}
	}
	else{
		$_SESSION["login"]="login" ;
		$_SESSION["password"]="password" ;
	}
}
?>