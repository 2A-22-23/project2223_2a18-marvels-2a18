<?php

include_once '../controller/categorieC.php';
 $categorie=new categorieC();//from voitures
 if (isset($_GET['nom_categorie']) && !empty($_GET['nom_categorie'])) {
    $list = $categorie->tri($_GET['nom_categorie']);
} else {
    $list = $categorie->listcategorie();
}

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
                        <span class="title">voitures</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard2.php">
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                        <span class="title">Categories</span>
                    </a>
                </li>

                <li>
                    <a href="dashboard.php">
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                        <span class="title">emna</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                        <span class="title">chihi</span>
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
        <div>
        
    </div>
<!---- main -->

            <div class="main">
                    <div class="topbar">
                        <div class="toggle">
                            <ion-icon name="menu-outline"></ion-icon>
                        </div>
                        
                        
                        <!---- mainImg -->
                        
        <div class="input-group">
        <form action="" method="GET" >
                        <input type="search"  name="nom_categorie" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  <button type="submit" class="btn btn-outline-primary">search</button>
            
        </form>
  
</div>
                    </div>
                                          
                
                 
                    
            
                               
                                <div class="details">
                             <!---- Order list -->
                            <div class="recentorders">
                                <div class="recentorders">
                                    <div class="cardheader">
                                        <h2>Categories</h2>
                                        <a href="addcategorie.php" class="btn">Add</a>
                                       
                                    </div>
                                    <table>
                                   
                                        <thead>
                                         <tr>
                                            <td>idcategorie</td>
                                            <td>nom_categorie</td>
                                            <td>nbval</td>
                                            <td>Modifier</td>
                                            <td>Supprimer</td>
                                          </tr>
                                        </thead>
                                       
                                    <tbody>
                                    <?php
                                                           
                foreach($list as $categorie) {
             ?>
                                        <tr>
                                           <td> <?php echo $categorie['idcategorie']; ?></td>
                                           <td> <?php echo $categorie['nom_categorie']; ?></td>
                                           <td> <?php echo $categorie['nbval']; ?></td>
                                           <td>
                                            <form method="post" action="updatecategorie.php">
						                     <input type="submit" class="btn modif" name="Modifier" value="Modifier">
						                     <input type="hidden" value=<?PHP echo $categorie['idcategorie']; ?> name="idcategorie">
					                        </form>
                                          </td>

                                           <td> 
                                           <form method="post" action="deletecategorie.php">
						                     <input type="submit" class="btn supp" name="Supprimer" value="Supprimer">
						                     <input type="hidden" value=<?PHP echo $categorie['idcategorie']; ?> name="idcategorie">
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
