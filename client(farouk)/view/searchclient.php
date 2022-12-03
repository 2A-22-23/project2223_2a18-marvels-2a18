<?php
 //include_once '../Model/Client.php';
 include_once '../Controller/ClientC.php';
 $client=new ClientC();
$list=$client->listClients();
//include '../config.php';
?>
<?php

$clientc = new ClientC();

if (isset($_GET['nom']) && !empty($_GET['nom'])) {
    $listt = $clientc->showclients($_GET['nom']);
} else {
    $listt = $clientc->listclients();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <title>Back with client</title>
	<title>Search Client</title>
    
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><ion-icon name="albums-outline"></ion-icon></span>
                        <span class="title">Marvels Auto</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard1.php">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">client</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard2.php">
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                        <span class="title">Role</span>
                    </a>
                </li>
             
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>
                        <span class="title">Help</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sing Out</span>
                    </a>
                </li>
                
            </ul>
        </div>

<form method="post">
    <div class="rightbox">
<label>Search</label>

<input type="text" name="search">
<input type="submit" name="submit">



<style>
    .search
    {
        position: absolute;
        top: 80px;
 left: 600;
 
  
    }
    .rightbox{
                float:right;
               margin-right: 600px;
                width:25%;
                height:280px;
                margin-top: 60px;
                
                
            }
    </style>
	<div>
</form>

</body>
</html>

<?php

$pdo = new PDO("mysql:host=localhost;dbname=user",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $pdo->prepare("SELECT * FROM `user` WHERE nom LIKE '%" . $str . "%'");
   
	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($client = $sth->fetch())
	{
		?>
		<br><br><br>
       <div class="right">
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
        </div>
<?php 
	}
		
}

	




?>

                                </div>
                                  </div>
                                

