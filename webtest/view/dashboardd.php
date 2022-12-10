<?php
session_start();
 include_once '../Model/Service.php';
 include_once '../Controller/ServiceC.php';
 $ServiceC=new ServiceC();
$listeServices=$ServiceC->afficherService();

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
                    <a href="#">
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
                    <a href="dashboardd.php">
                        
                        <span class="title">Services</span>
                    </a>
                </li>
                <li>
                    <a href="dashboardd2.php">
                      
                        <span class="title">Department</span>
                    </a>
                </li>
              

                <li>
                    <a href="search.php">
                      
                        <span class="title">Search for a service</span>
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
                             <!---- Services list -->
                            <div class="recentorders">
                                <div class="recentorders">
                                    <div class="cardheader">
                                        <h2>Services</h2>
                                        <a href="formAjoutService.php" class="btn">Ajouter</a>
                                    </div>
                                    <table>
                                   
                                        <thead>
                                         <tr>
                                            <td>Id Service</td>
                                            <td>Nom Service</td>
                                            <td>Prix</td>
                                            <td>Departement</td>
                                            <td>Modifier</td>
                                            <td>Supprimer</td>
                                          </tr>
                                        </thead>
                                       
                                    <tbody>
                                    <?php
                foreach($listeServices as $services) {
             ?>
                                        <tr>
                                           <td> <?php echo $services['id']; ?></td>
                                          
                                           <td> <?php echo $services['nameServ']; ?></td>
                                           <td> <?php echo $services['price']; ?></td>
                                           <td> <?php echo $services['idDep']; ?></td> 
                                           
                                           <td>
                                            <form method="post" action="formModifierService.php">
						                     <input type="submit" class="btn modif" name="Modifier" value="Modifier">
						                     <input type="hidden" value=<?PHP echo $services['id']; ?> name="id">
					                        </form>
                                          </td>

                                           <td> 
                                           <form method="post" action="supprimerService.php">
						                     <input type="submit" class="btn supp" name="Supprimer" value="Supprimer">
						                     <input type="hidden" value=<?PHP echo $services['id']; ?> name="id">
					                        </form> 
                                           </td>
                                           </tr>
                                           <?php
                }
                                           ?>
                                    </tbody>
                                    </table>
                                </div>
                                <form method="post" action="dashboard2.php">
						                     <input type="submit" class="button" name="Department" value="Department">
					                        </form>
                          

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