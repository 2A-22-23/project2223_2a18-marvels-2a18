
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="dashboard.css">
	<title>Search Client</title>
    
</head>
<body>
<div class="boxcontainer">
<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
	<div>
</form>

</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=user",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `user` WHERE nom = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($client = $sth->fetch())
	{
		?>
		<br><br><br>
        <div class="details">
                             <!---- Order list -->
                            
                                    <div class="cardheader">
		<center>
        <h2>Client with the same name</h2> 
        </center>
    
    <table border="1" bordercolor="#fd2600" align="center" width="70%">

    <thead>
        <tr>
            <th>Id Client</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>EMAIL</th>
            <th>MDP</th>
            <th>TELEPHONE</th>
           
        </tr>
    </thead>
    
            <tr>
            
                <td><?php echo $client->idc ;?></td>
                <td><?php echo $client->nom ;?></td>
                <td><?php echo $client->prenom; ?></td>
                <td><?php echo $client->email; ?></td>
                <td><?php echo $client->mdp; ?></td>
                <td><?php echo $client->telephone; ?></td>
                

		</table>
<?php 
	}
		
}

		/* else{
			echo "Name Does not exist";
		} */




?>
</table>
                                </div>
                                </div>
                                </div>
                                </div>

