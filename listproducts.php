<!DOCTYPE>
<html>
<head>
    <meta charset="iso-8859-1" />
    <title>Produits</title>
</head>
<body>
    <?php
    include("Header.php");
    $reponse=$bdd->query('SELECT * FROM products');
    
    ?>
<form method="post" action="product.php">
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
            	<td><image src='images/bb tigre.jpg' width="50px"></td>
            	<td><?php echo $donnees['cutiness'] ?></td>
            	<td><input type="submit" name="produits" value=<?php echo $donnees['name'] ?>></td>
            	</tr>
            	<?php
        	}
        	?>
        </tbody>
    </table>
</form>
</body>
</html>