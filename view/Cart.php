<!DOCTYPE>
<?php //view ?>
<html>
<head>
    <meta charset="iso-8859-1" />
    <title><h1>Cart</h1></title>
</head>
<body>
	<p1> Cart </p1>
    </br>
	<?php

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