<?php
session_start();
 //include_once '../model/commandes.php';
 include_once '../controller/commandeC.php';
 $commande=new commandeC();
$listevoitures=$commande->Listevoiture();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <title>Document</title>
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
                    <a href="../../dashboard.php">
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


<!---- main -->
<div class="main">
                    <div class="topbar">
                        <div class="toggle">
                            <ion-icon name="menu-outline"></ion-icon>
                        </div>
                        
                        <!---- mainImg -->
                        
                    </div>
                                          
                
                 
                    <div class="details">
                             <!---- Order list -->
                            <div class="recentorders">
                                <div class="recentorders">
                                    <div class="cardheader">
                                        <h2>Commandes</h2>
                                        <a href="addcdash.php" class="btn">Ajouter</a>
                                        <a href="search-name.php" class="btn">Search</a>
                                    </div>
                                    <table>
                                   
                                        <thead>
                                         <tr>
                                            <td>Id Commande</td>
                                            <td>Addresse</td>
                                            <td>Date</td>
                                            <td>Id CLIENT</td>
                                            <td>Id PIECE</td>
                                            <td>Id Voiture</td>
                                            <td>Id Service</td>
                                            <td>Modifier</td>
                                            <td>Supprimer</td>
                                          </tr>
                                        </thead>
                                       
                                    <tbody>
                                    <?php
                foreach($listevoitures as $voiture) {
             ?>
                                        <tr>
                                           <td> <?php echo $voiture['idcommande']; ?></td>
                                           <td> <?php echo $voiture['adresse']; ?></td>
                                           <td> <?php echo $voiture['date']; ?></td>
                                           <td> <?php echo $voiture['idclient']; ?></td>
                                           <td> <?php echo $voiture['idpiece']; ?></td>
                                           <td> <?php echo $voiture['idvoiture']; ?></td>
                                           <td> <?php echo $voiture['idservice']; ?></td>
                                           <td>
                                           <form method="POST" action="modcom.php">
                        <input type="submit" class="btn modif" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $voiture['idcommande']; ?> name="idcommande">
                    </form>
                                          </td>

                                           <td> 
                                           <form method="POST" action="deleteCommande.php">
                                          <input type="submit" class="btn modif" name="Delete" value="Delete">
                                          <input type="hidden" value=<?PHP echo $voiture['idcommande']; ?> name="idcommande">
                                           </form>
                                           </td>
                                           </tr>
                                           <?php
                }
                                           ?>
                                    </tbody>
                                    </table>
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
</body>
</html>