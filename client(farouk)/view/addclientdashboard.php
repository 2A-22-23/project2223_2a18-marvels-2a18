<?php
//Farouk
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
    <script defer src="../Code/addclientfront.js"></script>
    <title>Back with client</title>
</head>
<body>
<div class="inscription-form">
<form action="" method="POST" name='myForm'  onsubmit ="return(validate());">
<p>Nom:</p>
<input type="text" name="nom"   placeholder="Nom">     
<p>Prenom:</p>  
<input type="text" name="prenom"  placeholder="Prenom" >
<p>Email:</p>
<input type="email" name="email"   placeholder="Email" class="box" >
<p>Mot de passe:</p>
<input type="password" name="mdp" placeholder="Mot de passe" >
<p>Numero de telephone:</p>
<input type="tel" name="telephone"  placeholder="Telephone" >
<p>Role:</p>
<select name="idrole" id="idrole">
<?php foreach ($l as $role ){?>
     <option value="<?= $role['idrole']?>"><?= $role['role']?></option>
       <?php }?>
</select>

<!-- <select name="idrole" id="idrole">
  <option value="1">admin</option>
  <option value="2">client</option>
  
</select> -->
<br></br> 
<br></br>
<!-- <input type="number" name="idrole" p  placeholder="(1:Admin 2:Client)"><br></br>  -->
<button type="submit">Ajouter</button>
</form> 
</div>

<!-- <script type = "text/javascript">
      
         var letters = /^[A-Za-z]+$/;
         var pass =/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/
         // Form validation code will come here.
         function validate() {
         
            if( document.myForm.nom.value == "" ) {
               alert( "Veuillez entrer votre nom!" );
             
               document.myForm.nom.focus() ;
               return false;
            }
            if( !document.myForm.nom.value.match(letters) ) {
               alert( "le nom doit ne contenir que des lettres!" );
           
               document.myForm.nom.focus() ;
               return false;
            }
            if( document.myForm.email.value == "" ) {
            alert( "Veuillez entrer votre email!" );
            document.myForm.EMail.focus() ;
            return false;
         }

            if( document.myForm.prenom.value == "" ) {
               alert( "veuillez entrer votre prenom!" );
               document.myForm.prenom.focus() ;
               return false;}
               
               if( !document.myForm.prenom.value.match(letters) ) {
               alert( "le prenom doit ne contenir que des lettres!" );
           
               document.myForm.prenom.focus() ;
               return false;
            }
            if( document.myForm.mdp.value == "" ) {
               alert( "veuillez entrer votre mdp!" );
               document.myForm.mdp.focus() ;
               return false;}
               if( !document.myForm.mdp.value.match(pass) ) {
               alert( "mot de pass doit contenir numero/majuscule/miniscule et au moins 8 caracteres" );
           
               document.myForm.mdp.focus() ;
               return false;
            }
               if( document.myForm.telephone.value == "" ) {
               alert( "veuillez entrer votre telephone!" );
               document.myForm.telephone.focus() ;
               return false;}  

            
           
            
         }
      
  </script> -->




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
    select {
        width: 245px;
        height :50px;
       
    }
    select:focus {
        width: 245px;
        height :50px;
       
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