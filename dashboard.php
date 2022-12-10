<?php
session_start();
if(isset($_SESSION["email"]))
{
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./client(farouk)/view/dashboard.css">
    <title>Back admin</title>
    

</head>
<body>
<div id="deconnecter"> 
    <form method="POST" action="client(farouk)/Code/logout.php">
        <button class="btn">Se Deconnecter</button>
    </form>

</div>
    
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
                    <a href="client(farouk)/view/dashboard.php">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">user/Role</span>
                    </a>
                </li>
                <li>
                    <a href="fatma/BACK/view/dashboard.php">
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                        <span class="title">Reclamations</span>
                    </a>
                </li>
             
                <li>
                    <a href="./webtest/view/dashboardc1.php">
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                        <span class="title">Piece/Model</span>
                    </a>
                </li>
                <li>
                    <a href="./webtest/view/dashboard.php">
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                        <span class="title">commandes/lignecommandes</span>
                    </a>
                </li>
                <li>
                    <a href="webtest\view\dashboardv1.php">
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                        <span class="title">Voitures/Categories</span>
                    </a>
                </li>
                <li>
                    <a href="webtest\view\dashboards.php">
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                        <span class="title">Services/Departement</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sing Out</span>
                    </a>
                </li>
                
            </ul>
        <!-- </div>
        <div id="deconnecter"> 
    <form method="POST" action="../Code/index.php">
        <button class="disconnect">Se Deconnecter</button>
    </form>
</div> -->
<style>
   .disconnect{
    font-size: 18px;
    font-weight: bold;
    margin: 20px 0;
    padding: 10px 15px;
    width:7% ;
    border: 0;
    border-radius: 5px;
    background-color:red;
    margin-top: 70px;
    margin-right: 30px;
    margin-left:1600px;
   

    }
    .disconnect:hover {
    color:red ;
    background-color:grey;
    

  } 

  
</style>


                                
                          

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
<?php
}

else
{
    echo "veuillez se connecter";
    header('Location:client(farouk)/Code/login.php');
}
?>