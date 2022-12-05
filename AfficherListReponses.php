<?php
include '../Controller/ReponseC.php';
$ReponseC=new offreC();
$listeservices=$ReponseC->afficherService();
?>

<html>
    <head></head>
    <body>
        <button>
            <a href="ajouterReponse.php">Ajouter </a>
        </button>
        <table border="1" align="center">
            <tr>
            <th>IdRep</th>
            <th>id</th>
            <th>Reponse</th>  
            <th>Modifier</th>
            <th>Supprimer</th>
             </tr>
             <?php
                foreach($listeservices as $reponses) {
             ?>
             <tr>
                 <td> <?php echo $reponses['IdRep']; ?></td>
                 <td> <?php echo $reponses['id']; ?></td>
                 <td> <?php echo $reponses['Reponse']; ?></td>

                 <td>
                    <a href="modifierReponse.php?id=<?php echo $reponses['IdRep'];
                       ?>"> Modifier </a> 
                 </td> 
                 <td> 
                    <a href="supprimerReponse.php?id=<?php echo $reponses['IdRep'];
                       ?>">Supprimer </a>
                 </td>
             </tr>
             <?php
                }
             ?>
         </table>
    </body>
</html>