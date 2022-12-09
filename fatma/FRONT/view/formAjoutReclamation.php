



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   


    <!--<link rel="stylesheet" type="text/css" href="style.css"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
   


    <title>User Display</title>
</head>


    <body>
        <button><a href="index.php" class="btn">Retour</a></button>
        <hr>


        <form action="AjoutReclamation.php" method="post">
            <table border="1" align="center">
            
               
                <tr>
                    <td>
                        <label for="Details">Reclamation:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Details" id="Details" >
                    </td>
                    <input type="hidden" name="id" value="<?php echo $reclamations['id']; ?>">

                </tr>           
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" class="btn" value="Envoyer" <?php


if(
    isset($_POST['Details']) && !empty($_POST['Details'])
  ){
    $reclamations = new reclamations($_POST['Sujet'],$_POST['Details']);

    
    $reclamationC->ajouterservices($reclamations);

    
   }
   else
      {
            echo 'Erreur';
            header('Location: index.php');
      }
    
?>> 
                    </td>
                    <td>
                        <input type="reset" class="btn" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>




    </body>
</html>