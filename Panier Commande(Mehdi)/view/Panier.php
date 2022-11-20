<?php
include '../controller/commandeC.php';
//comment
$commande = new commandeC();
$list = $commande->Listevoiture();
?>
<html>

<head>
<link rel="stylesheet" href="cart.css">
</head>

<body>
<br>
    <center>
        <h1 style="color:white;">PANIER</h1>
        <h2>
            <a href="addCommande.php" style="color:white;">Add Commande</a>
        </h2>
        <form action="search-id.php">
        <input type="submit" value="Search By ID" />
        </form>
        <form action="search-name.php">
        <input type="submit" value="Search By Car Name" />
        </form>
    </center><br><br><br>
    <table border="1" align="center" width="70%">
        <tr bgcolor="#6495E"> 
            <th>idcommande</th>
            <th>nom_voiture</th>
            <th>prix</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        
        <?php
        foreach ($list as $voiture) {
        ?>
            <tr bgcolor="#F0FFF">
            <td><?= $voiture['idcommande']; ?></td>
                <td><?= $voiture['nom_voiture']; ?></td>
                <td><?= $voiture['prix']; ?></td>
               
                <td align="center">
                    <form method="POST" action="updatevoiture.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $voiture['idcommande']; ?> name="idcommande">
                    </form>
                </td>
                <td align="center">
                    <form method="POST" action="deleteCommande.php">
                        <input type="submit" name="delete" value="delete">
                        <input type="hidden" value=<?PHP echo $voiture['idcommande']; ?> name="idcommande">
                    </form>
                </td>
                
                
            </tr>

        <?php
        }
        ?>
    </table>
    

</body>

</html>