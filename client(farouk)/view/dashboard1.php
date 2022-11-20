<?php
 //include_once '../Model/Client.php';
 include_once '../Controller/ClientC.php';
 $client=new ClientC();
$list=$client->listClients();

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
                                        <h2>client</h2>
                                        <a href="addClient.php" class="btn">Ajouter</a>
                                        <a href="searchclient.php" class="btn">Search</a>
                                    </div>
                                    <table>
                                   
                                        <thead>
                                         <tr>
                                         <td>Nom</td>
                                            <td>Prenom</td>
                                            <td>Email</td>
                                            <td>Mot de passe</td>
                                            <td>Telephone</td>
                                            <td>Modifier</td>
                                            <td>Supprimer</td>
                                          </tr>
                                        </thead>
                                       
                                    <body>
                                    <?php
                foreach($list as $client) {
             ?>
                                        <tr>
                                           <td> <?php echo $client['nom']; ?></td>
                                           <td> <?php echo $client['prenom']; ?></td>
                                           <td> <?php echo $client['email']; ?></td>
                                           <td> <?php echo $client['mdp']; ?></td>
                                           <td> <?php echo $client['telephone']; ?></td>
                                        
                                           <td>
                                            <form method="post" action="updateClient.php">
						                     <input type="submit" class="btn modif" name="Modifier" value="Modifier">
						                     <input type="hidden" value=<?PHP echo $client['idc']; ?> name="id">
					                        </form>
                                          </td>

                                           <td> 
                                           <form method="post" action="deleteClient.php">
						                     <input type="submit" class="btn supp" name="Supprimer" value="Supprimer">
						                     <input type="hidden" value=<?PHP echo $client['idc']; ?> name="id">
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