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
    function addvoiture ($commande)
    { 
        
        $sql = "INSERT INTO commande 
        VALUES (:i,:n,:c)";
        $db = config::getConnexion(); //fonction statique
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'i' => $commande->idcommande,
                'n' => $commande->nom_voiture,
                'c' => $commande->prix,
               
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
                    nom_voiture = :nom_voiture, 
                    prix = :prix
                    
                WHERE idcommande= :idcommande'
            );
            $query->execute([
                'idcommande' => $id,
                'nom_voiture' => $commande->nom_voiture,
                'prix' => $commande->prix
                
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
