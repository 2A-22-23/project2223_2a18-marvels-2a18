<?php
 //include_once '../model/commandes.php';
 include_once '../controller/lignecommandeC.php';
 $commande=new commandeLC();
$listevoitures=$commande->Listevoiture();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" href="search.css">
	<link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>
<style>
.rightbox{
	float:right;
   margin-right: 450px;
	width:25%;
	height:280px;
	margin-top: 60px;
}

.rightable{
	float:right;
   margin-right: 530px;
	width:25%;
	height:280px;
	margin-top: 60px;
}

.whitet{
color: white;

}



</style>
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
                        <span class="title">Commandes</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard2.php">
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                        <span class="title">Ligne Commandes</span>
                    </a>
                </li>

                
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>
                        <span class="title">Help</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sing Out</span>
                    </a>
                </li>
                
            </ul>
        </div>


                          

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<script>
    //Menu Toggle
    let toggle = document.querySelector(".toggle");
    let navigation = document.querySelector('.navigation');
    let main= document.querySelector('.main');

    toggle.onclick = function(){
        navigation.classList.toggle("active");
        main.classList.toggle("active")
    }

    //adding hoverd class in selected div ! 
    let list =document.querySelectorAll(".navigation li");
    function activeLink(){
        list.forEach((item)=>
        item.classList.remove('hovered'));
        this.classList.add('hovered')
    }
    list.forEach((item)=> 
    item.addEventListener('mouseover',activeLink));
</script>

<br><br><br>


<form method="post">
<div class="rightbox">
<label STYLE="color: white;">Search</label>

<input  STYLE=" background-color: #e7eaf6;" type="text" name="search">
<input   type="submit" name="submit">
</div>

</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=marvels",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `lignecommande` WHERE idcourse LIKE '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br>
		<div class="rightable">
		<table border="3" align="center" width="500" border="1">
			<tr bgcolor="#f95959">
				<th>ID-course</th>
				<th>Quantity</th>
                <th>idarticle</th>
			</tr>
			<tr bgcolor="white">
				<td><?php echo $row->idcourse; ?></td>
				<td><?php echo $row->quantity;?></td>
                <td><?php echo $row->idarticle;?></td>
			</tr>

		</table>
		</div>
<?php 
	}
		
		
		else{
			echo "Not found";
		}


}

?>


