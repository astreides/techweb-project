#ici verifier que le $_POST["login"] et que le $_POST["password"] soit correspondant avec la bdd et si oui faite rentrer dans le if
<?php 
if(($_POST["login"] != NULL) && ($_POST["password"] != NULL)){
$_SESSION["id"]= "5";
$_SESSION["login"]=$_POST["login"] ;
$_SESSION["password"]=$_POST["password"] ;
}
	
?>