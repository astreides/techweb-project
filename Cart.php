<!DOCTYPE>
<html>
<head>
    <meta charset="iso-8859-1" />
    <title>Cart</title>
</head>
<body>
    <?php include("Header.php") ?></br>
	<?php
	/*$reponse=$bdd->query('SELECT p.* FROM order_products p 
	INNER JOIN order o  ON p.id=o.id
	WHERE p.id=4') or die(print_r($bdd->errorInfo()));*/

	$reponse=$bdd->query('select p.* from products p
INNER JOIN order_products op ON p.id = op.product_id
WHERE op.order_id = 4');

	?>
	<table>
	<thead><tr>
		<th>Categorie</th>
        <th>Picture</th>
        <th>Cuteness</th>
        <th>Remove from Cart</th>
        </tr></thead>
	<tbody>
		<?php while($donnees=$reponse->fetch()){
			?>
			<tr>
            <td> <?php echo $donnees['name'] ?></td>
            <td><image src=<?php echo $donnees['lien_image'] ?> width="200px"></td>
            <td><?php echo $donnees['cutiness'] ?></td>
            <td><input type="submit" name="produits" value="delete"></td>
            </tr>
			<?php
		}?>
	</tbody>
	</table>
</body>
</html>