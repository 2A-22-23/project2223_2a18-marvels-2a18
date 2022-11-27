<?php

/* include '../Controller/ClientCb.php'; */
 include_once '../Controller/ClientCb.php';
 include_once '../Controller/rolec.php';
$error = "";

// create client
$client = null;
$role=null ;

$rolec=new rolec();
$l=$rolec ->Listerole1();
// create an instance of the controller
$clientC = new ClientC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["mdp"]) &&
    isset($_POST["telephone"])&&
    isset($_POST["idrole"])
) {
    if (
        !empty($_POST['nom']) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["mdp"]) &&
        !empty($_POST["telephone"])&&
        !empty($_POST["idrole"])
    ) {
        $client = new Client(
            null,
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['mdp'],
            $_POST['telephone'],
            $_POST['idrole']
            
        );
        $clientC->addClient($client);
        header('Location:dashboard1.php');
    } else
        $error = "Missing information";
}


?>
<?php
 //include_once '../Model/Client.php';

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
    <title>Back with client</title>
</head>
<body>
<div class="inscription-form">
<form action="" method="POST" name='inscription-form' id='myForm'>
<p>Nom:</p>
<input type="text" name="nom" id="nom" pattern="[A-Za-z]+" placeholder="Nom" class="box" title="alphabets seulement" required> <br></br>      
<p>Prenom:</p>   
<input type="text" name="prenom" pattern="[A-Za-z]+" placeholder="Prenom" class="box" title="alphabets seulement"  required><br></br>
<p>Email:</p>
<input type="email" name="email"   placeholder="Email" class="box" title="*****@***.**"  required><br></br>
<p>Mot de passe:</p>
<input type="password" name="mdp" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Mot de passe" class="box" title ="numero/majuscule/miniscule et au moins 8 caracteres"  required><br></br>
<p>Telephone:</p>
<input type="tel" name="telephone" pattern="[0-9]+"  placeholder="Telephone" class="box" title="0 a 9"  required><br></br>
<p>ID ROLE:(1:Admin 2:Client)</p>
<input type="number" name="idrole" pattern="[1-2]*"  placeholder="(1:Admin 2:Client)" class="box" title="(1:Admin 2:Client)"  required><br></br> 
<button type="submit">Ajouter</button>
</form> 
</div>

<!-- <select name="client" id="role">
<?php
/* foreach($l as $role){
 */?>
<option> </* $role['idrole'] */</option>
<?php
/* } */
?>
</select> -->




<style>
.inscription-form {
    position: absolute;
    top: 50%;
    left: 55%;
    transform: translate(-50%, -50%);
    width: 350px;
  }
  .inscription-form h1 {
    font-size: 15px;
    text-align: center;
    text-transform: uppercase;
    margin: 40px 0;
  }
  .inscription-form p {
    font-size: 20px;
    margin: 15px 0;
  }
  .inscription-form input {
      font-size: 16px;
      padding: 15px 10px;
      width: 70%;
      border-radius: 5px ;
      border-color:rgb(36, 13, 13);
      outline: none;
    }
    .inscription-form button {
      font-size: 18px;
      font-weight: bold;
      margin: 20px 0;
      padding: 10px 15px;
      width:50% ;
      border: 0;
      border-radius: 5px;
      background-color:red;
      
    }
    .inscription-form button:hover {
      color:red ;
      background-color: black;
     
  
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