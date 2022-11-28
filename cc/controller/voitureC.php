<?php
include_once '../config.php';
include '../model/voitures.php';

class voitureC
{



public function Listevoiture()
    {
        $sql = "SELECT * FROM voitures";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function addvoiture ($voitures)
    { 
        
        $sql = "INSERT INTO voitures 
        VALUES ( :i,:n,:k,:c)";
        $db = config::getConnexion(); //fonction statique
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'i' => $voitures->idvoiture,
                'n' => $voitures->nom_voiture,
                'k' => $voitures->idcategorie,
                'c' => $voitures->prix,
               
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    } 
    function deletevoiture($id)
    {
        $sql = "DELETE FROM voitures WHERE idvoiture = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function updatevoiture($voiture, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE voitures SET 
                    idvoiture=:idvoiture,
                    nom_voiture = :nom_voiture,
                    id_categorie=:id_categorie, 
                    prix = :prix
                    
                WHERE idvoiture= :idvoiture'
            );
            $query->execute([
                'idvoiture' => $id,
                'nom_voiture' => $voitures->voit,
                'id_categorie' => $voitures->cat,
                'prix' => $voitures->pr
                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showvoiture($id)
    {
        $sql = "SELECT * from voitures where idvoiture = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $voitures = $query->fetch();
            return $voitures;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }   
    }

}
    ?>
