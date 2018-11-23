
<?php
$user=0;
$req=$bdd->query('SELECT * FROM users');
while($donnees=$req->fetch()){
	if (($_POST["login"]==$donnees["username"])&&($_POST["password"]==$donnees["password"])) {$user=$donnees["id"];
		if(isset($_POST["remember_me"])!= NULL){
			if ($_POST["remember_me"]== "ok"){
			
			setcookie('id',$donnees["id"], time() + 600, null, null, false, true); 
			setcookie('user',$donnees["username"], time() + 600, null, null, false, true); 
			setcookie('password',$donnees["password"], time() + 600, null, null, false, true); 
			}
	}
}
if(($_POST["login"] != NULL) && ($_POST["password"] != NULL) && ($user!=0)){

$_SESSION["id"]= $user;
$_SESSION["login"]=$_POST["login"] ;
$_SESSION["password"]=$_POST["password"] ;
}
}
?>

