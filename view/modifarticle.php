<?php //view
if(isset($_POST["name"]) != NULL){
	$reponse=$bdd->query('SELECT * FROM products WHERE name=\''.$_POST["name"].'\'');
	$donnees=$reponse->fetch();

?>
<form method="post" >
<input type="hidden" name="product" value=<?php echo $_POST["name"] ?> >
<table border=6 cellspacing=12 cellpadding=20>
    <th>Nom : <?php echo $donnees['name'] ?> : <input type="text" name="newname" /></br></th><tr>
    <th>Lien Image : <?php echo $donnees['lien_image'] ?> : <input type="text" name="newlien" /></br></th><tr>
    <th>Cutiness : <?php echo $donnees['cutiness'] ?> : <input type="text" name="newcutiness" /></br></th><tr>
    <th>Description : <?php echo $donnees['description'] ?> : <input type="text" name="newdescription" /></br></th><tr>
	<input type="submit" name="appliquer" >
</br></br></th><tr>
</table>
</form>
<?php } ?>