<!DOCTYPE>
<html>
<head>
    <meta charset="iso-8859-1" />
    <title>Produits</title>
</head>
<body>
    <?php
    
    $reponse=$bdd->query('SELECT * FROM products');
    ?>
<form method="post" action="?page=product">
	    <table border=6 cellspacing=12 cellpadding=20>
        <thead><tr>
            <th>Categorie</th>
            <th>Picture</th>
            <th>Cuteness</th>
            <th>See more</th>
            </tr></thead>
        
        <tbody>
        	<?php while($donnees=$reponse->fetch())
        	{
        		?>
        		<tr>
            	<td> <?php echo $donnees['name'] ?></td>
            	<td><image src=<?php echo $donnees['lien_image'] ?> width="200px"></td>
            	<td><?php echo $donnees['cutiness'] ?></td>
            	<td><input type="submit" name="product" value=<?php echo $donnees['name'] ?>></td>
            	</tr>
            	<?php
        	}
        	?>
        </tbody>
    </table>
</form>
</body>
</html>