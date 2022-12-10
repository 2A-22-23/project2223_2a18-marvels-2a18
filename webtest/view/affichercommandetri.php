<?php
session_start();
include "../controller/lignecommandeC.php";

 $commandesC=new commandeLC();
 
    $listcommandes=$commandesC->affichercommandetri();

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="cart.css">
<head>
<?php
        foreach ($listcommandes as $voiture) {
        ?> <br><br><br><br> <table  align="center" width="70%">
        <tr bgcolor="#6495E"> 
            <th>idcourse</th>
            <th>quantity</th>
            <th>idarticle</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
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
        </table>
        <?php
}
