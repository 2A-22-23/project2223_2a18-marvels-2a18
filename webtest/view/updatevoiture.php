<?php

include '../controller/voitureC.php';

$error = "";

// create voiture
$voitures = null;

// create an instance of the controller
$voitureC = new voitureC();
var_dump($_POST);
//var_dump($_POST["nom_voiture"]);
if (
    isset($_POST["idvoiture"]) &&
    isset($_POST["nom_voiture"]) &&
    isset($_POST["idcategorie"]) &&
    isset($_POST["prix"]) 
    
) {
    if (
        !empty($_POST["idvoiture"]) &&
        !empty($_POST['nom_voiture']) &&
        !empty($_POST['idcategorie']) &&
        !empty($_POST["prix"]) 
        
    ) {
        echo "test";
        $voitures = new voitures( 
            $_POST['idvoiture'],
            $_POST['nom_voiture'],
            $_POST['idcategorie'],
            $_POST['prix']
         
        );
        //var_dump($categorie);
        $voitureC->updatevoiture($voitures, $_POST["idvoiture"]);
        
        
        header('Location:dashboardv2.php');
    } else
        $error = "Missing information";
}
?>
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
                    <a href="MainDashboard.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="dashboardv2.php">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">Voitures</span>
                    </a>
                </li>
                <li>
                    <a href="dashboardv3.php">
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                        <span class="title">Categories</span>
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
        <div>
        
    </div>
    <?php
    if (isset($_POST['idvoiture']))
     {
        $voitures = $voitureC->showvoiture($_POST['idvoiture']);

    ?>
     <div class="inscription-form">
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td bgcolor=#287bff>
                        <label for="idvoiture">idvoiture:
                        </label>
                    </td>
                    <td bgcolor=#287bff><input type="text" name="idvoiture" id="idvoiture" value="<?php echo $voitures['idvoiture']; ?>" ></td>
                </tr>
                <tr>
                    <td bgcolor=#287bff>
                        <label for="nom_voiture">nom_voiture:
                        </label>
                    </td>
                    <td bgcolor=#287bff><input type="text" name="nom_voiture" id="nom_voiture" value="<?php echo $voitures['nom_voiture']; ?>" ></td>
                </tr>
                <tr>
                    <td bgcolor=#287bff>
                        <label for="idcategorie">idcategorie:
                        </label>
                    </td>
                    <td bgcolor=#287bff><input type="text" name="idcategorie" id="idcategorie" value="<?php echo $voitures['idcategorie']; ?>" ></td>
                </tr>
                <tr>
                    <td bgcolor=#287bff>
                        <label for="prix">prix:
                        </label>
                    </td>
                    <td bgcolor=#287bff><input type="text" name="prix" id="prix" value="<?php echo $voitures['prix']; ?>" ></td>
                </tr>
                
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="update">
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


