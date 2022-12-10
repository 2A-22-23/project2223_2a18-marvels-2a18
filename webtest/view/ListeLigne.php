<?php
include '../controller/lignecommandeC.php';
$commande = new commandeLC();
$list = $commande->Listevoiture();
?>
<html>

<head>
<link rel="stylesheet" href="cart.css">
</head>

<body>
<br>
    <center>
        <h1 style="color:white;">LigneCommande</h1>
        <h2>
            <a href="addligne.php" style="color:white;">Add Ligne</a>
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
            <th>idcourse</th>
            <th>quantity</th>
            <th>idarticle</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        
        <?php
        foreach ($list as $voiture) {
        ?>
            <tr bgcolor="#F0FFF">
            <td><?= $voiture['idcourse']; ?></td>
                <td><?= $voiture['quantity']; ?></td>
                <td><?= $voiture['idarticle']; ?></td>
               
                <td align="center">
                    <form method="POST" action="updateligne.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $voiture['idcourse']; ?> name="idcourse">
                    </form>
                </td>
                <td align="center">
                    <form method="POST" action="deleteligne.php">
                        <input type="submit" name="delete" value="delete">
                        <input type="hidden" value=<?PHP echo $voiture['idcourse']; ?> name="idcourse">
                    </form>
                </td>
                
                
            </tr>

        <?php
        }
        ?>
    </table>
    

</body>

</html>