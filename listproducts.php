<!DOCTYPE>
<html>
<head>
    <meta charset="iso-8859-1" />
    <title>Produits</title>
</head>
<body>
    <?php include("Header.php") ?>
<form method="post" action="product.php">
	    <table border=6 cellspacing=12 cellpadding=20>
        <thead><tr>
            <th>Categorie</th>
            <th>Picture</th>
            <th>Cuteness</th>
            <th>See more</th>
            </tr></thead>
        <tfoot><tr>
            <td><br /></td>
            <td colspan="3">Footer<br /></td>
            </tr></tfoot>
        <tbody><tr>
            <td>Tigre</td>
            <td><image src='images/bb tigre.jpg' width="50px"></td>
            <td>300</td>
            <td><input type="submit" name="produits" value="tigre"></td>
            </tr><tr>
                <td>Ours</td>
                <td><image src='images/bb ours.jpg' width="50px"></td>
                <td>279</td>
                <td><input type="submit" name="produits" value="ours"></td>
                </tr><tr>
					<td>Loutre</td>
					<td><image src='images/loutre.jpg' width="50px"></td>
					<td>279</td>
					<td><input type="submit" name="produits" value="loutre"></td>
					</tr></tbody>
    </table>
</form>
</body>
</html>