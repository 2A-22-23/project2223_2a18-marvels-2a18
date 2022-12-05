<?php
include '../Controller/ReclamationC.php';
$ReclamationC=new offreC();
$listeservices=$ReclamationC->afficherReclamation();
?>

<html>
    <head></head>
    <body>
        <button>
            <a href="ajouterReclamation.php">Ajouter </a>
        </button>
        <table border="1" align="center">
            <tr>
            <th>id</th>
            <th>Sujet</th>
            <th>Details</th>  
            <th>Modifier</th>
            <th>Supprimer</th>
             </tr>
             <?php
                foreach($listeservices as $reclamations) {
             ?>
             <tr>
                 <td> <?php echo $reclamations['id']; ?></td>
                 <td> <?php echo $reclamations['Sujet']; ?></td>
                 <td> <?php echo $reclamations['Details']; ?></td>


             </tr>
             <?php
                }
             ?>
         </table>
    </body>
</html>