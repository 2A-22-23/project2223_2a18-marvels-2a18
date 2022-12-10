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
            $_POST['prix']
           
        ); 
        // create an instance of the controller
$voitureC = new voitureC();
        $voitureC->addVoiture($voitures);
        header('Location:dashboard1.php');
    } else
        $error = "Missing information";
}


?>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>add</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <title>Back with cars</title>
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
                        <span class="title">Categories</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                        <span class="title">emna</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                        <span class="title">chihi</span>
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
    <a href="Listevoiture.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <div class="container">
            <div class="login-box ptb--100">
                <form method ='POST'>
                    
                    <div class="login-form-head">
                        <h4>Cars Addition :) </h4>
                        <p>Add Cars Here !</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            
                            <input  type="text" name="idvoiture" placeholder="entrer l'id de voiture" id="idvoiture" >
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            
                            <input  type="text" name="nom_voiture" placeholder="entrer le nom de voiture" id="nom_voiture" >
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            
                            <input  type="text" name="idcategorie" placeholder="entrer l'id categorie correspontdente" id="idcategorie" >
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>
                        
                        <div class="form-gp">
                            
                            <input type="text" name="prix" placeholder="entrer le prix de voiture" id="prix" >
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        
                    
                            <div class="col-6 text-right">
                                <a href="#">Addition Done !</a>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Good Day <a href="register.html">BYE</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
 
</body>

</html>