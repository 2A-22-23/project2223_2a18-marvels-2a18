<?php
include '../Controller/ServiceC.php';
$ServiceC=new ServiceC();
$listeservices=$ServiceC->afficherService();
?>

<html>
    <head></head>
    <body>
        <button>
            <a href="ajouterService.php">Ajouter </a>
        </button>
        <table border="1" align="center">
            <tr>
            <th>id</th>
            <th>Nom</th>
            <th>Departement</th>
            <th>prix</th>  
            <th>Modifier</th>
            <th>Supprimer</th>
             </tr>
             <?php
                foreach($listeservices as $services) {
             ?>
             <tr>
                 <td> <?php echo $services['id']; ?></td>
                 <td> <?php echo $services['nameServ']; ?></td>
                 <td> <?php echo $services['idDep']; ?></td>
                 <td> <?php echo $services['price']; ?></td>
                 

                
                 <td>
                    <a href="modifierService.php?id=<?php echo $services['id'];
                       ?>"> Modifier </a> 
                 </td> 
                 <td> 
                    <a href="supprimerService.php?id=<?php echo $services['id'];
                       ?>">Supprimer </a>
                 </td>
             </tr>
             <?php
                }
             ?>
         </table>
    </body>
</html>