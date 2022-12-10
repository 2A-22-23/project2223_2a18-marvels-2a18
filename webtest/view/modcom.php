<?php

include '../controller/commandeC.php';

$error = "";

// create voiture
$commande = null;

// create an instance of the controller
$commandeC = new commandeC();
//var_dump($_POST);
//var_dump($_POST["addresse"]);
if (
    isset($_POST["idcommande"]) &&
    isset($_POST["addresse"]) &&
    isset($_POST["date"]) 
    
) {
    if (
        !empty($_POST["idcommande"]) &&
        !empty($_POST['addresse']) &&
        !empty($_POST["date"]) 
        
    ) {
        echo "test";
        $commande = new commande( 
            $_POST['idcommande'],
            $_POST['addresse'],
            $_POST['date']
         
        );
        //var_dump($voiture);
       $commandeC->updatevoiture($commande, $_POST["idcommande"]);
        
        
        header('Location:dashboard1.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>User Display</title>
</head>

<body>
    
    <div id="error">
        <?php echo $error; ?>
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
    <?php
    if (isset($_POST['idcommande']))
     {
        $commande = $commandeC->showvoiture($_POST['idcommande']);

    ?>
     <div class="inscription-form">
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td bgcolor=#287bff>
                        <label for="idcommande">idcommande:
                        </label>
                    </td>
                    <td bgcolor=#287bff><input type="text" name="idcommande" id="idcommande" value="<?php echo $commande['idcommande']; ?>" maxlength="30"></td>
                </tr>
                <tr>
                    <td bgcolor=#287bff>
                        <label for="addresse">addresse:
                        </label>
                    </td>
                    <td bgcolor=#287bff><input type="text" name="addresse" id="addresse" value="<?php echo $commande['addresse']; ?>" maxlength="30"></td>
                </tr>
                <tr>
                    <td bgcolor=#287bff>
                        <label for="date">date:
                        </label>
                    </td>
                    <td bgcolor=#287bff><input type="text" name="date" id="date" value="<?php echo $commande['date']; ?>" maxlength="30"></td>
                </tr>
                
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                    
                </tr>
            </table>
        </form>
                        </div>
    <?php
    }
    ?>

</body>

</html>

<style>
.inscription-form {
    position: absolute;
    top: 50%;
    left: 55%;
    transform: translate(-50%, -50%);
    width: 350px;
    color: white;
  }
  .inscription-form h1 {
    font-size: 15px;
    text-align: center;
    text-transform: uppercase;
    margin: 40px 0;
    color: white;
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
      color: black;
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


