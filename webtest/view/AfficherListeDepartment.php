<?php
include '../Controller/DepartmentC.php';
$DepartmentC=new DepartmentC(); 
$listedepartment=$DepartmentC->afficherDep();
?> 

<html>
    <head></head>
    <body>
        <button>
            <a href="AjouterDepartment.php">Ajouter </a>
        </button>
        <table border="1" align="center">
            <tr>
            <th>Id Department</th>
            <th>Name Department</th>  
                <th>Description</th>

                <th>Modifier</th>
                <th>Supprimer</th>
             </tr>
             <?php
                foreach($listedepartment as $Department) {
             ?>
             <tr>
                 <td> <?php echo $Department['idDep']; ?></td>
                 <td> <?php echo $Department['nameDep']; ?></td>
                 <td> <?php echo $Department['description']; ?></td>
                 <td>
                    <a href="ModifierDepartment.php?idDep=<?php echo $Department ['idDep'];
                       ?>"> Modifier </a> 
                 </td> 
                 <td> 
                    <a href="SupprimerDepartment.php?idDep=<?php echo $Department['nameDep'];
                       ?>">Supprimer </a>
                 </td>
             </tr>
             <?php
                }
             ?>
         </table>
    </body>
</html>