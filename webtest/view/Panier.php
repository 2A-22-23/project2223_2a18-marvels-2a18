<?php
include '../controller/commandeC.php';
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
        <form action="addligne.php">
        <input type="submit" value="Add Ligne" />
        </form>
    </center><br><br><br>
    <table border="1" align="center" width="70%">
        <tr bgcolor="#6495E"> 
            <th>idcommande</th>
            <th>addresse</th>
            <th>date</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        
        <?php
        foreach ($list as $voiture) {
        ?>
            <tr bgcolor="#F0FFF">
            <td><?= $voiture['idcommande']; ?></td>
                <td><?= $voiture['addresse']; ?></td>
                <td><?= $voiture['date']; ?></td>
               
                <td align="center">
                    <form method="POST" action="updatecommande.php">
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