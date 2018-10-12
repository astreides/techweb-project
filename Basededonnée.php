<?php
try
{
	$bdd=newPDO('mysql:host=localhost;dbname=dump;charset=utf8','root','');

}
catch(Exception $e)
{
		die('Erreur: ' . $e-getMessage());
}
$reponse=$bdd->query('SELECT * FROM orders');

while($donnees=$reponse->fetch())
{
	<?php echo $donnees['type']; ?>
	
}
?>







