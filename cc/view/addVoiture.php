
<?php

include '../controller/voitureC.php';

$error = "";
// create voiture
$voitures = null;
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0)
    {
            // Testons si le fichier n'est pas trop gros
            if ($_FILES['image']['size'] <= 8000000)
            {
                    // Testons si l'extension est autorisée
                    $fileInfo = pathinfo($_FILES['image']['name']);

                    $extension = $fileInfo['extension'];
                    $allowedExtensions = ['jpg', 'jpeg', 'png'];

                    $_FILES['image']['name']=$_POST["nom_voiture"].'.'.$extension;
                   
                    if (in_array($extension, $allowedExtensions))
                    {
                            // On peut valider le fichier et le stocker définitivement
                            move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/' . basename($_FILES['image']['name']));
                            $url = basename($_FILES['image']['name']);
            
                    }
            }
            
    }

if (
    isset($_POST["idvoiture"])&&
    isset($_POST["nom_voiture"]) &&
    isset($_POST["idcategorie"]) &&
    isset($_POST["prix"]) 
   



) {
    if (
        !empty($_POST['idvoiture']) &&
        !empty($_POST['nom_voiture']) &&
        !empty($_POST['idcategorie']) &&
        !empty($_POST["prix"]) 
        
    ) {     echo"blablabla";

        $voitures = new voitures(
           
            $_POST['idvoiture'],
            $_POST['nom_voiture'],
            $_POST['idcategorie'],
            $_POST['prix'],
            $url
           
        ); 
        // create an instance of the controller
$voitureC = new voitureC();
        $voitureC->addVoiture($voitures);
        header('Location:dashboard1.php');
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
                        <span class="title">voitures</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard2.php">
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                        <span class="title">categorie</span>
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
        <form action="" method="POST" enctype="multipart/form-data">
        <table bordercolor=black border="1" align="center">
        <tr>
                <td bgcolor=#287bff>
                    <label for="idvoiture" class="txt"> ID voiture :
                    </label>
                </td>
               <td bgcolor=#287bff><input type="number" name="idvoiture" id="idvoiture" maxlength="30" required></td>
            </tr>
            <tr >
            <tr >
                <td bgcolor=#287bff>
                    <label for="nom_voiture" class="txt"> nom_voiture :
                    </label>
                </td>
                <td bgcolor=#287bff><input type="text"  name="nom_voiture" id="nom_voiture" maxlength="30" required></td>
            </tr>
            <tr >
                <td bgcolor=#287bff>
                    <label for="id_categorie" class="txt">id_categorie :
                    </label>
                </td>
                <td bgcolor=#287bff><input type="text"  name="idcategorie" id="idcategorie" maxlength="30" required  ></td>
            </tr>
            <tr >
                <td bgcolor=#287bff>
                    <label for="prix" class="txt">prix :
                    </label>
                </td>
                <td bgcolor=#287bff><input type="text"  name="prix" id="prix" maxlength="30" required  ></td>
            </tr>
            <tr>
                <td>
                    <label for="image">image: </label>
                </td>
                <td>
                    <input type="file" id="image" name="image" value="importer une image"/>
                </td>
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