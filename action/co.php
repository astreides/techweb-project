#ici verifier que le $_POST["login"] et que le $_POST["password"] soit correspondant avec la bdd et si oui faite rentrer dans le if
<?php
$user=0;
$req=$bdd->query('SELECT * FROM users');
while($donnees=$req->fetch()){
	if (($_POST["login"]==$donnees["username"])&&($_POST["password"]==$donnees["password"])) {$user=$donnees["id"];}
}
if(($_POST["login"] != NULL) && ($_POST["password"] != NULL) && ($user!=0)){
	$_SESSION["id"]= $user;
	$_SESSION["login"]=$_POST["login"] ;
	$_SESSION["password"]=$_POST["password"] ;

	$blub= $bdd->query('SELECT * FROM orders WHERE user_id=\''.$_SESSION["id"].'\' AND type ="CART"');
	$i=0;
	while($blob=$blub->fetch()){
		$i=1;
	}
	if($i==0){
		$lol = $bdd->query('INSERT INTO orders (user_id,type,status,amount) VALUES (\''.$_SESSION["id"].'\',"CART","CART","0")');
	}
}
?>

