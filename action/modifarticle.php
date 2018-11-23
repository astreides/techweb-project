<?php //action
if(isset($_POST["newdescription"])){
	$reponse=$bdd->query('SELECT * FROM products WHERE name=\''.$_POST["product"].'\'');
	$donnees=$reponse->fetch();
}
?>