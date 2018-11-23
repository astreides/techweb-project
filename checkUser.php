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
		if(isset($_SESSION["id"]) == NULL ){
			setcookie('id',$donnees["id"], time() + 120, null, null, false, true); 
			setcookie('user',$donnees["username"], time() + 120, null, null, false, true); 
			setcookie('password',$donnees["password"], time() + 120, null, null, false, true); 
		}
	}
}
?>