
<?php
include("Header.php");
$reponse=$bdd->query('SELECT * FROM orders');
while($donnees=$reponse->fetch())
{

	echo $donnees['type'];
	?>
	<html></br>
	</html>
<?php	
}
?>
