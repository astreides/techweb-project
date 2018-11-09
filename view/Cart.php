<!DOCTYPE>
<?php //view ?>
<html>
<head>
<title>Panier</title>
</head>
<body>
	
    <h1><center>Panier<center></h1>
    </br>
	<?php

	$reponse=$bdd->query('select * from products p
INNER JOIN order_products op ON p.id = op.product_id
WHERE op.order_id = 4');

	?>
	<table  border=6 cellspacing=12 cellpadding=20>
	<thead><tr>
		<th>Categorie</th>
        <th>Picture</th>
        <th>Cuteness</th>
		<th>quantité</th>
		<th>prix total</th>
		<th>Remove from Cart</th>
        </tr></thead>
	<tbody>
		<?php while($donnees=$reponse->fetch()){
			?>
			<tr>
            <td> <?php echo $donnees['name'] ?></td>
            <td><image src=<?php echo $donnees['lien_image'] ?> width="200px"></td>
            <td><?php echo $donnees['cutiness'] ?></td>
			<td><?php echo $donnees['quantity'] ?></td>
			<td><?php echo( $donnees['quantity']* $donnees['unit_price']) ?></td>
            <td><form method="post"><input type="submit" name="delete" value=<?php echo $donnees["id"] ?> >
			</form> </td> 
            </tr>
			<?php
		}?>
	</tbody>
	</table>
</body>
</html>