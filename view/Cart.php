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
if(isset($_SESSION["id"])){
	$reponse=$bdd->query('select * from products p
INNER JOIN order_products op ON p.id = op.product_id
WHERE op.order_id = \''.$_SESSION["id"].'\'');
}
$somme = 0;
$prix = 0;
	?>
	<table  border=6 cellspacing=12 cellpadding=20>
	<thead><tr>
		<th>Categorie</th>
        <th>Picture</th>
        <th>Cuteness</th>
		<th>quantité</th>
		<th>prix unitaire </th>
		<th>prix total</th>
		<th>Remove from Cart</th>
        </tr></thead>
	<tbody>
	
		<?php
		if(isset($_SESSION["id"])){
			while($donnees=$reponse->fetch()){
				?>
				<tr>
				<td> <?php echo $donnees['name'] ?></td>
				<td><image src=<?php echo $donnees['lien_image'] ?> width="200px"></td>
				<td><?php echo $donnees['cutiness'] ?></td>
				<td><?php echo $donnees['quantity'] ?></td>
				<td><?php echo $donnees['unit_price']?></td>
				<td><?php echo( $donnees['quantity']* $donnees['unit_price']) ?></td>
				<td><form method="post">
				<input type="hidden" name="delete" value=<?php echo $donnees["product_id"] ?> >
				<input type="submit" value="delete" >
				</form> </td> 
				</tr>

				<?php
				$somme+=$donnees['quantity'];
				$prix+=$donnees['quantity']*$donnees['unit_price'];
			}
		}?>
		<td> total</td>
		<td><form method="post">
		<?php if(isset($_SESSION["id"])){ ?>
			<input type="hidden" name="validate_order" value=<?php echo $donnees["order_id"] ?> >
			<?php } ?>
			<input type="submit" value="valider le panier" >
			</form></td>
		<td>nombre d'article</td>
		<td><?php echo $somme?></td>
		<td> prix total du panier</td>
		<td><?php echo $prix?></td>
		<td><form method="post">
		<?php if(isset($_SESSION["id"])){ ?>
			<input type="hidden" name="delete_all" value=<?php echo $donnees["order_id"] ?> >
			<?php } ?>
			<input type="submit" value="vider le panier" >
			</form></td>
	</tbody>
	</table>
</body>
</html>