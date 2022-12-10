<?php
include_once '../config.php';
include '../model/lignecommande.php';

class commandeLC
{

public function Listevoiture()
    {
        $sql = "SELECT * FROM lignecommande";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function addvoiture ($lignecommande,$idpiece,$idclient)
    { 
        
        $sql = "INSERT INTO lignecommande 
        VALUES (:i,:n,:c,:idc,:idp)";
        $db = config::getConnexion(); //fonction statique
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'i' => $lignecommande->idcourse,
                'n' => $lignecommande->quantity,
                'c' => $lignecommande->idarticle,
                'idc'=>$idclient,
                'idp'=>$idpiece,
               
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    } 
    function delete($id)
    {
        $sql = "DELETE FROM lignecommande WHERE idcourse = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function updatevoiture($lignecommande, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE lignecommande SET 
                    idcourse=:idcourse,
                    quantity = :quantity, 
                    idarticle = :idarticle
                    
                WHERE idcourse= :idcourse'
            );
            $query->execute([
                'idcourse' => $id,
                'quantity' => $lignecommande->quantity,
                'idarticle' => $lignecommande->idarticle
                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showvoiture($id)
    {
        $sql = "SELECT * from lignecommande where idcourse = $id";
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

    function affichercommandetri()
    {

        $sql="select * from lignecommande ORDER BY quantity";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

}
    ?>
