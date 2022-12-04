<?php

//include '../controller/roleC.php';
include_once '../Controller/roleC.php';
$error = "";

// create role
$role = null;

// create an instance of the controller
$roleC = new roleC();
//var_dump($_POST);
//var_dump($_POST["role"]);
if (
    isset($_POST["idrole"]) &&
    isset($_POST["role"]) /* &&
    isset($_POST["idclient"])  */
    
) {
    if (
        !empty($_POST["idrole"]) &&
        !empty($_POST['role']) /* &&
        !empty($_POST["idclient"])  */
        
    ) {
       
        $role = new role( 
            $_POST['idrole'],
            $_POST['role']/* ,
            $_POST['idclient'] */
         
        );
        //var_dump($role);
       $roleC->updaterole($role, $_POST["idrole"]);
        
        
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <script defer src="./role.js"></script>
    <title>User Display</title>
</head>

<body>
   

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idrole']))
     {
        $role = $roleC->showrole($_POST['idrole']);

    ?>
<div class="inscription-form">

           <form  action="" method="POST" name='myForm' onsubmit = "return(validate());">
           
                <input type="hidden" name="idrole" id="idrole" value="<?php echo $role['idrole']; ?>" >
                <p>Role</p>
                    <input type="text" name="role" id="role" value="<?php echo $role['role']; ?>" >

                        <button type="submit" value="Update">Update</button>

                    <button type="reset" value="Reset">Reset</button>
        </form>
                        </div>
    <?php
    }
    ?>
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
<!-- <script type = "text/javascript">
      
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

        
            
           
            
         }
      
  </script> -->
</body>

</html>