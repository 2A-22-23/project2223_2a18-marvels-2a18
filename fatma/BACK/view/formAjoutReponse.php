<?php
/*ici */
include '../Controller/ReponseC.php';


$conn = new PDO('mysql:host=localhost;dbname=marvels auto;charset=utf8', 'root', '');
$cat="SELECT * FROM reclamations";	
$listcat=$conn->query($cat);



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <title>User Display</title>
</head>


    <body>
        <button><a href="dashboard.php" class="btn">Retour</a></button>
        <hr>

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="details">
                    <div class="recentorders">
                        <div class="cardheader">
                            <h2>Ajouter Reponse</h2>
                            </div>   

        <form action="AjoutReponse.php" method="post">
            <table border="1" align="center">

            
                


            
                <!--//////////////////////////////////////////////-->
                <!--//////////////////////////////////////////////-->
                <!--//////////////////////////////////////////////-->
                <!--cle etrangere liste deroulante-->
                
                <tr>
                    <td>
                        <label for="id">Reclamation:
                        </label>
                    </td>

                    <td>

                        <select name="id" id="id">
                                <?php while($row=$listcat->fetch()){?>   
				                      <option value="<?php echo $row[0]; ?>" >
                                              <?php echo $row[1]; ?>
				                      </option>
			                    <?php }?>
		                 </select>

                     </td>
                    <input type="hidden" name="IdRep" value="<?php echo $reponses['IdRep']; ?>">
                </tr>
                <!--//////////////////////////////////////////////-->
                <!--//////////////////////////////////////////////-->
                <!--//////////////////////////////////////////////-->
                                
                <tr>
                    <td>
                        <label for="Reponse">Reponse:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Reponse" id="Reponse" >
                    </td>
                    <input type="hidden" name="IdRep" value="<?php echo $reponses['IdRep']; ?>">

                </tr>   
                
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" class="btn" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" class="btn" value="Annuler" >
                    </td>
                </tr>


            </table>
        </form>
    </body>
</html>