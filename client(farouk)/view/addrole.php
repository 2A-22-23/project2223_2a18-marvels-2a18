<?php

//include '../controller/roleC.php';
 include_once '../Controller/roleC.php';
$error = "";

// create role
$role = null;

if (
    isset($_POST["idrole"])&&
    isset($_POST["role"]) /* &&
    isset($_POST["idclient"])  */

    
) {
    if (
        !empty($_POST['idrole']) &&
        !empty($_POST['role']) /* &&
        !empty($_POST["idclient"])  */
        
    ) {     echo"blablabla";

        $role = new role($_POST['idrole'],$_POST['role']); //,$_POST['idclient']
        // create an instance of the controller
        $roleC = new roleC();
        $roleC->addrole($role);
        header('Location:dashboard2.php');
    } else
        $error = "Missing information";
}


?>
<?php
 //include_once '../Model/Client.php';

$role=new roleC();
$list=$role->Listerole();

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
    <link rel="stylesheet" href="role.css">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <script defer src="./role.js"></script>
    <title>Back with client</title>
</head>

<body>
<!--     <a href="affrole.php" class="affrole">Back to list </a>
 -->    

    <div id="error">
        <?php echo $error; ?>
    </div>
<div class="inscription-form">
<form  action="" method="POST" name='myForm' onsubmit = "return(validate());">
    <p>ID ROLE:</p>
    <input type="number" name="idrole" id="idrole">
    <p>ROLE:</p>
    <input type="text"  name="role"  id="role">
    <button type="submit">Ajouter</button>
    
    <!-- <script type = "text/javascript">
      var numbers =/^[1-9]+$/;
         var letters = /^[A-Za-z]+$/;
         var pass =/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/
         // Form validation code will come here.
         function validate() {
         
            if( document.myForm.role.value == "" ) {
               alert( "Veuillez remplir le role!" );
             
               document.myForm.role.focus() ;
               return false;
            }
            if( !document.myForm.role.value.match(letters) ) {
               alert( "le role doit ne contenir que des lettres!" );
           
               document.myForm.role.focus() ;
               return false;
            }

            if( document.myForm.idrole.value == "" ) {
               alert( "Veuillez remplir le id " );
             
               document.myForm.idrole.focus() ;
               return false;
            }
            if( !document.myForm.idrole.value.match(numbers) ) {
               alert( "id doit ne contenir que des chiffres!" );
           
               document.myForm.idrole.focus() ;
               return false;
            }
           
            
         }
      
  </script> -->
                  
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
        </div>
        </div>
        
       
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
