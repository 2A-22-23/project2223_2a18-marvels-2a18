<?php



include '../controller/commandeC.php';
include '../controller/lignecommandeC.php';
include '../controller/piecec.php';

$error = "";
$piece = null;
$ligne = null;
//$ligne = new lignecommande;

// create commande
$voiture = null;

if (
    isset($_POST["idcommande"])&&
    isset($_POST["addresse"]) &&
    isset($_POST["date"]) 

    
) {
    if (
        !empty($_POST['idcommande']) &&
        !empty($_POST['addresse']) &&
        !empty($_POST["date"]) 
        
    ) {     echo"blablabla";

        $voiture = new commande($_POST['idcommande'],$_POST['addresse'],$_POST['date']); 
        // create an instance of the controller
        $commandeC = new commandeC();
        $commandeC->addVoiture($voiture);
        header('Location:Panier.php');
    } else
        $error = "Missing information";
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
    <link rel="stylesheet" href="commande.css">
</head>
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<!--fonts-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<!--custom css file link--> 
 <link rel="stylesheet" href="style.css">


<header class="header"> 


<div id="menu-btn" class="fas fa-bars"></div>
<a href="#"class="logo"> 
  
   
      
    <span>Marvels</span>Auto </a> 
 <nav class="navbar">
<a href="..\main\main.php"> Home </a>
<a href="#vehicles"> Vehicles </a>
<a href="#services"> Services </a>
<a href="..\view\addCommande.php"> Add Item </a>
<a href="..\view\dashboard.php"> Dashboard </a>

 </nav>

<div id="login-btn"> 

    <button class="btn">Login</button>
    <i class="far fa-user"></i>
</div>



</header>

<body>
    <a href="Panier.php" class="panier">Back to Cart </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>
    <div class="inscription-form">
    <form  onsubmit=" return nameValidation()" action="" method="POST" name='inscription-form' id='myForm'>
        <table border="2" align="center">
        <tr>
                <td>
                    <label for="idcommande" class="txt"> id-commande:
                    </label>
                </td>
               <td><input type="number" name="idcommande" id="idcommande" maxlength="30" required></td>
            </tr>
            <tr>
            <tr>
                <td>
                    <label for="addresse" class="txt"> Addresse:
                          
                    </label>
                    
                </td>
                <td><input type="text"  name="addresse" id="addresse" maxlength="30" ></td>
                <td><p style="color: red" id="nomEr"></p></td>
            </tr>
            <tr>
                <td>
                    <label for="date" class="txt">Date:
                    </label>
                </td>
                <td><input type="text"  name="date" id="date" maxlength="30" required  ></td>
            </tr>
        
                
           
                <td>
                    <input  type="submit" value="Save">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
                    </div>

            <?php /* $ligne = new lignecommande(1,'2','3');
            $lignec = new commandeLC();
            $lignec->addvoiture($ligne,2,3); */

            $ligne = new lignecommande($_POST['idcourse'],$_POST['quantity'],$_POST['idarticle']); 
        // create an instance of the controller
        $ligneC = new commandeLC();
        $ligneC->addVoiture($ligne,1,2);
            ?> 


    <style>
* {
  padding: 0;
  margin: 0;
  font-family: sans-serif;
}
 .inscription-form {
  position: absolute;
  top: 50%;
  left: 52%;
  transform: translate(-50%, -50%);
  width: 350px;
}
.inscription-form h1 {
  font-size: 15px;
  text-align: center;
  text-transform: uppercase;
  margin: 40px 0;
}
.inscription-form label {
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
  .inscription-form button:hover
   {
    color:red ;
    background-color: black;}
                        
     </style>
                        
                        

    
<script src="condition.js"></script>
<div class="louta">

   </div>
</body>



</html>
