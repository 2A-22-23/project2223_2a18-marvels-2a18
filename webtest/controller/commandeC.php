<?php
include '../config.php';
include '../model/commande.php';

class commandeC
{

public function Listevoiture()
    {
        $sql = "SELECT * FROM commande";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function addvoiture ($commande,$idc)
    { 
        
        $sql = "INSERT INTO commande 
        VALUES (NULL,:n,:c,:idc,:idp,:idv,:ids)";
        $db = config::getConnexion(); //fonction statique
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
               
                'n' => $commande->addresse,
                'c' => $commande->date,
                'idc' =>$idc,
                'idp'=> $commande->idp,
                'idv'=> $commande->idv,
                'ids'=> $commande->ids
               
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    } 
    function delete($id)
    {
        $sql = "DELETE FROM commande WHERE idcommande = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function updatevoiture($commande, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE commande SET 
                    idcommande=:idcommande,
                    addresse = :addresse, 
                    date = :date
                    
                WHERE idcommande= :idcommande'
            );
            $query->execute([
                'idcommande' => $id,
                'addresse' => $commande->addresse,
                'date' => $commande->date
                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showvoiture($id)
    {
        $sql = "SELECT * from commande where idcommande = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $voiture = $query->fetch();
            return $voiture;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }   
    }

}
    ?>