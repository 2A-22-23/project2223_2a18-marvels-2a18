<?php

include '../controller/categorieC.php';

$error = "";

// create categorie
$categorie = null;

if (
    isset($_POST["idcategorie"])&&
    isset($_POST["nom_categorie"]) &&
    isset($_POST["nbval"]) 
   


    
) {
    if (
        !empty($_POST['idcategorie']) &&
        !empty($_POST['nom_categorie']) &&
        !empty($_POST["nbval"]) 
        
    ) {     echo"blablabla";

        $categorie = new categorie(
           
            $_POST['idcategorie'],
            $_POST['nom_categorie'],
            $_POST['nbval']
           
        ); 
        // create an instance of the controller
$categorieC = new categorieC();
        $categorieC->addcategorie($categorie);
        header('Location:dashboard2.php');
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
</head>

<body>
    <a href="listcategorie.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <div class="container">
            <div class="login-box ptb--100">
                <form onsubmit="return nameValidation()" method ='POST'>
                    
                    <div class="login-form-head">
                        <h4>Categories Addition :) </h4>
                        <p>Add Categories here !</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            
                            <input  type="text" name="idcategorie" placeholder="entrer l'id categorie" id="idcategorie">
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            
                            <input  type="text" name="nom_categorie" placeholder="entrer le nom de categorie" id="nom_categorie"  >
                            <p style="color: red" id="nomEr"></p>
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                       
                            
                            <input type="text" name="nbval"  placeholder="entrer le nbr de voitures valables" id="nbval" >
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
        <script src="../view/condition.js"></script>
</body>

</html>