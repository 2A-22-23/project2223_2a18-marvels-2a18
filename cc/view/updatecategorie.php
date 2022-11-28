<?php

include '../controller/categorieC.php';

$error = "";

// create categorie
$categorie = null;

// create an instance of the controller
$categorieC = new categorieC();
var_dump($_POST);
//var_dump($_POST["nom_categorie"]);
if (
    isset($_POST["idcategorie"]) &&
    isset($_POST["nom_categorie"]) &&
    isset($_POST["nbval"]) 
    
) {
    if (
        !empty($_POST["idcategorie"]) &&
        !empty($_POST['nom_categorie']) &&
        !empty($_POST["nbval"]) 
        
    ) {
        echo "test";
        $categorie = new categorie( 
            $_POST['idcategorie'],
            $_POST['nom_categorie'],
            $_POST['nbval']
         
        );
        //var_dump($categorie);
       $categorieC->updatecategorie($categorie, $_POST["idcategorie"]);
        
        
        header('Location:dashboard2.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Update</title>
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



    <center>

    <button><a href="listcategorie.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idcategorie']))
     {
        $categorie = $categorieC->showcategorie($_POST['idcategorie']);
     }
    ?>

     
        </center>
      
        <div class="container">
            <div class="login-box ptb--100">
                <form method ='POST'>
                    
                    <div class="login-form-head">
                        <h4>Categories Update :) </h4>
                        <p>Update Your Categorie Here !</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            
                            <input  type="text" name="idcategorie" id="idcategorie" value="<?php echo $categorie['idcategorie']; ?>" maxlength="30">
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            
                            <input  type="text" name="nom_categorie" id="nom_categorie" value="<?php echo $categorie['nom_categorie']; ?>" maxlength="30">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            
                            <input type="text" name="nbval" id="nbval" value="<?php echo $categorie['nbval']; ?>" maxlength="30">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        
                    
                            <div class="col-6 text-right">
                                <a href="#">Update Done !</a>
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