
<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" href="search.css">
</head>
<body>
<br><br><br><br>

<form method="post">
<label>Search</label>
<input class="but" type="text" name="search">
<input class="but" type="submit" name="submit">
	
</form>

</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=marvels",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `commande` WHERE idcommande = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table border="3" align="center" width="500" border="1">
			<tr bgcolor="#FFEBC">
				<th>Name</th>
				<th>Description</th>
                <th>Prix</th>
			</tr>
			<tr bgcolor="white">
				<td><?php echo $row->idcommande; ?></td>
				<td><?php echo $row->nom_voiture;?></td>
                <td><?php echo $row->prix;?></td>
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "Not found";
		}


}

?>
