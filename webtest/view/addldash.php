<?php
 //include_once '../model/commandes.php';
 include_once '../controller/lignecommandeC.php';
 $commande=new commandeLC();
$listevoitures=$commande->Listevoiture();

?>
<?php

//include '../controller/commandeC.php';

$error = "";

// create commande
$voiture = null;

if (
    isset($_POST["idcourse"])&&
    isset($_POST["quantity"]) &&
    isset($_POST["idarticle"]) 

    
) {
    if (
        !empty($_POST['idcourse']) &&
        !empty($_POST['quantity']) &&
        !empty($_POST["idarticle"]) 
        
    ) {     echo"blablabla";

        $voiture = new lignecommande($_POST['idcourse'],$_POST['quantity'],$_POST['idarticle']); 
        // create an instance of the controller
        $commandeC = new commandeLC();
        $commandeC->addVoiture($voiture,1,2);
        header('Location:dashboard2.php');
    } else
        $error = "Missing information";
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
        <div class=inscription-form>
        <form action="" method="POST">
        <table bordercolor=black border="1" align="center">
        <tr>
                <td bgcolor=#287bff>
                    <label for="idcourse" class="txt"> ID Course :
                    </label>
                </td>
               <td bgcolor=#287bff><input type="number" name="idcourse" id="idcourse" maxlength="30" required></td>
            </tr>
            <tr >
            <tr >
                <td bgcolor=#287bff>
                    <label for="quantity" class="txt"> Quantity :
                    </label>
                </td>
                <td bgcolor=#287bff><input type="text"  name="quantity" id="quantity" maxlength="30" required></td>
            </tr>
            <tr >
                <td bgcolor=#287bff>
                    <label for="idarticle" class="txt">idarticle :
                    </label>
                </td>
                <td bgcolor=#287bff><input type="text"  name="idarticle" id="idarticle" maxlength="30" required  ></td>
            </tr>
                
            <td></td>
            
                <td>
                    <input type="submit" value="Save">
                </td>
                
            </tr>
        </table>
    </form>
                    </div>
                    <style>
.inscription-form {
    position: absolute;
    top: 50%;
    left: 55%;
    transform: translate(-50%, -50%);
    width: 400px;
    height : 350px;
    color: white;
  }
  .inscription-form h1 {
    font-size: 15px;
    text-align: center;
    text-transform: uppercase;
    color : white;
    margin: 40px 0;
    
  }
  .inscription-form p {
    font-size: 20px;
    margin: 20px 0;
    
   
  }
  .inscription-form input {
      font-size: 16px;
      padding: 15px 10px;
      width: 70%;
      border-radius: 5px ;
      border-color:rgb(36, 13, 13);
      outline: none;
      color: black;
    }
    .inscription-form button {
      font-size: 13px;
      font-weight: bold;
      margin: 20px 0;
      padding: 10px 15px;
      width:25% ;
      border: 0;
      border-radius: 5px;
      background-color:red;
      
    }
    .inscription-form button:hover {
      color:red ;
      background-color: black;
     
  
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