<?php

include '../controller/roleC.php';

$error = "";

// create role
$role = null;
$roleC = new roleC();
if (
    isset($_POST["idrole"])&&
    isset($_POST["role"]) &&
    isset($_POST["idclient"]) 

    
) {
    if (
        !empty($_POST['idrole']) &&
        !empty($_POST['role']) &&
        !empty($_POST["idclient"]) 
        
    ) {  

        $role = new role($_POST['idrole'],$_POST['role'],$_POST['idclient']); 
        // create an instance of the controller
        //$role = new role();
        $roleC->addrole($role);
        header('Location:affrole.php');
    } else
        $error = "Missing information";
}

?>
<?php
 //include_once '../Model/role.php';
 include_once '../Controller/roleC.php';
 $role=new roleC();
$list=$role-> Listerole();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <title>Back with role</title>
</head>
<body>
<div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="6" align="center">
        <tr>
                <td>
                    <label for="idrole" class="txt"> id-role:
                    </label>
                </td>
               <td><input type="number" name="idrole" id="idrole" pattern="[0-9]+" maxlength="30" required></td>
            </tr>
            <tr>
            <tr>
                <td>
                    <label for="role" class="txt"> role:
                    </label>
                </td>
                <td>
                    <input type="text"  name="role"  id="role" pattern="[a-zA-z]+" maxlength="30" required></td>
                    <div class="select">
  
           
                </tr>
            <tr>
                <td>
                    <label for="idrole" class="txt">idrole:
                    </label>
                </td>
                <td><input type="number"  name="idrole" pattern="[0-9]+" id="idrole" maxlength="30" required  ></td>
            </tr>
                
           
                <td>
                    <input type="submit" value="Save">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
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
                        <span class="title">role</span>
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