<?php

include '../controller/voitureC.php';

$error = "";

// create voiture
$voiture = null;

// create an instance of the controller
$voitureC = new voitureC();
var_dump($_POST);
//var_dump($_POST["nom_voiture"]);
if (
    isset($_POST["idvoiture"]) &&
    isset($_POST["nom_voiture"]) &&
    isset($_POST["id_categorie"]) &&
    isset($_POST["prix"]) 
    
) {
    if (
        !empty($_POST["idvoiture"]) &&
        !empty($_POST['nom_voiture']) &&
        !empty($_POST['id_categorie']) &&
        !empty($_POST["prix"]) 
        
    ) {
        echo "test";
        $voitures = new voitures( 
            $_POST['idvoiture'],
            $_POST['nom_voiture'],
            $_POST['id_categorie'],
            $_POST['prix']
         
        );
        //var_dump($categorie);
       $voitureC->updatevoiture($voitures, $_POST["idvoiture"]);
        
        
        header('Location:dashboard1.php');
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

<button><a href="Listevoiture.php">Back to list</a></button>
<hr>

<div id="error">
    <?php echo $error; ?>
</div>

<?php
if (isset($_POST['idvoiture']))
 {
    $voitures = $voitureC->showvoiture($_POST['idvoiture']);
 }
?>

 
    </center>
  
    <div class="container">
        <div class="login-box ptb--100">
            <form method ='POST'>
                
                <div class="login-form-head">
                    <h4>Cars Update :) </h4>
                    <p>Update Your Car Here !</p>
                </div>
                <div class="login-form-body">
                    <div class="form-gp">
                        
                        <input  type="text" name="idvoiture" id="idvoiture" value="<?php echo $voitures['idvoiture']; ?>" maxlength="30">
                        <i class="ti-email"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="form-gp">
                        
                        <input  type="text" name="nom_voiture" id="nom_voiture" value="<?php echo $voitures['nom_voiture']; ?>" maxlength="30">
                        <i class="ti-lock"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="form-gp">
                        
                        <input  type="text" name="id_categorie" id="id_categorie" value="<?php echo $voitures['id_categorie']; ?>" maxlength="30">
                        <i class="ti-email"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="form-gp">
                        
                        <input type="text" name="prix" id="prix" value="<?php echo $voitures['prix']; ?>" maxlength="30">
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
    
