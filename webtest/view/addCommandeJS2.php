<?php
session_start();

include '../controller/commandeC.php';
/* include '../controller/piecesc.php';
include '../controller/voitureC.php'; */
include '../controller/ServiceC.php';
$error = "";
$piece=null;
$piecec=new ServiceC();
$l=$piecec ->Listerole1();
// create commande
$voiture = null;
$idclient=null;
$idclient=$_SESSION['id'];
if (
    /* isset($_POST["idcommande"])&& */
    isset($_POST["addresse"]) &&
    isset($_POST["date"]) &&
    isset($_POST["idservice"])

    
) {
    if (
      /*   !empty($_POST['idcommande']) && */
        !empty($_POST['addresse']) &&
        !empty($_POST["date"]) &&
        !empty($_POST["idservice"])
        
    ) {     echo"blablabla";

        $voiture = new commande(null,$_POST['addresse'],$_POST['date'],0,0,$_POST["idservice"]); 
        // create an instance of the controller
        $commandeC = new commandeC();
        $commandeC->addVoiture($voiture,$idclient);
         header('Location:../../fatma/FRONT/view/index.php'); 
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
 <a href="../../fatma/FRONT/view/index.php"> Home </a>
<a href="#vehicles"> Vehicles </a>
<a href="#services"> Services </a>


 </nav>





</header>

<body>
    <a href="Panier.php" class="panier">Back to Cart </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>
    <div class="inscription-form">
    <form name='myForm' action="" method="POST" name='inscription-form' onsubmit = "return(validate());">
        <table border="2" align="center">
       <!--  <tr>
                <td>
                    <label for="idcommande" class="txt"> id-commande:
                    </label>
                </td>
               <td><input type="number" name="idcommande" id="idcommande"> </td>
            </tr> -->
            <tr>
            
            <tr>
            <tr>
                                        <td>
                                            <label class="txt" for="idpiece">Service: </label>
                                        </td>
                                        <td>
                                            <select name="idservice" id="idservice">
                                                <?php foreach ($l as $piece ){?>
                                                    <option value="<?= $piece['id']?>"><?= $piece['nameServ']?></option>
                                                <?php }?>
                                            </select>
                                        </td>
                                    </tr>
                <td>
                    <label for="addresse" class="txt"> Addresse:  </label>
                    
                </td>
                <td><input type="text"  name="addresse" id="addresse"  ></td>
                <td><p style="color: red" id="nomEr"></p></td>
            </tr>
            <tr>
                <td>
                    <label for="date" class="txt">Date:
                    </label>
                </td>
                <td><input type="text"  name="date" id="date" placeholder="dd/mm/yyyy" ></td>
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
 
<script type = "text/javascript">
      
         var letters = /^[A-Za-z1-9]+$/;
         // Form validation code will come here.
         function validate() {
         
            if( document.myForm.idcommande.value == "" ) {
               alert( "Veuillez entrer l'ID !" );
             
               document.myForm.idcommande.focus() ;
               return false;
            }
            if( !document.myForm.addresse.value.match(letters) ) {
               alert( "l'adresse doit contenir des chiffres et des lettres!" );
           
               document.myForm.addresse.focus() ;
               return false;
            }
            

          
            if( document.myForm.date.value == "" ) {
               alert( "veuillez entrer votre date !" );
               document.myForm.date.focus() ;
               return false;}
              

            
           
            
         }
      
  </script>
 
  

</body>
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
</html>