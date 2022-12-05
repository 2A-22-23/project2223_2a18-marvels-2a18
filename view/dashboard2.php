<?php

include_once '../Model/Department.php';
include_once '../Controller/DepartmentC.php';

 $DepartmentC=new DepartmentC();
$listedepartment=$DepartmentC->afficherDep();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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
                        <span class="title">MarvelsAuto</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
               
                <li>
                    <a href="dashboard.php">
                       
                        <span class="title">Services</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard2.php">
                       
                        <span class="title">Departments</span>
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
                        <div class="user">
                            <img src="logo.png">
                        </div>
                    </div>
                                          
                <!--Departments list!-->
                    <div class="details">
                                <div class="recentorders">
                                <div class="cardheader">
                                    <h2></h2>
                                    <a href="formAjoutDep.php" class="btn">Ajouter</a>
                                </div>
                                <table>
                                    <thead>
                                    <tr>
                                       
                                        <td>Department id</td>
                                        <td>Department name</td>
                                        <td>Description</td>
                                        <td>Modifier</td>
                                        <td>Supprimer</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                 foreach($listedepartment as $department) {
                                ?>
                                    <tr>
                                           <td> <?php echo $department['idDep']; ?></td>
                                           <td> <?php echo $department['nameDep']; ?></td>
                                           <td> <?php echo $department['description']; ?></td>
                                           <td>
                                            <form method="POST" action="formModifierDep.php">
						                     <input type="submit" class="btn modif" name="Modifier" value="Modifier">
						                     <input type="hidden" value=<?PHP echo $department['idDep']; ?> name="idDep">
					                        </form>
                                          </td>

                                           <td>
                                           <form method="POST" action="SupprimerDep.php">
						                     <input type="submit" class="btn supp" name="Supprimer" value="Supprimer">
						                     <input type="hidden" value=<?PHP echo $department['idDep']; ?> name="idDep">
					                        </form> 
                                           </td>
                                           </tr>
                                           <?php
                }
                                           ?>
                                </tbody>
                                </table>
                            </div>  
                        </div>
                       
                    </div>
            </div>
            <form method="post" action="dashboard.php">
		 <input type="submit" class="button" name="services" value="services">
	</form>
            </div>
    </div>

    <form method="post" action="dashboard.php">
		 <input type="submit" class="button" name="services" value="services">
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