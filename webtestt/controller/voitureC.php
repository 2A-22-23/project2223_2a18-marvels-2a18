<?php
include_once '../config.php';
include '../model/voitures.php';

class voitureC
{

    public function Listerole1()
    {
        $sql = "SELECT idvoiture,nom_voiture FROM article";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

public function Listevoiture()
    {
        $sql = "SELECT * FROM article";
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

        $sql = "INSERT INTO article
        VALUES ( :i,:n,:k,:c,:url)";
        $db = config::getConnexion(); //fonction statique
        try {

            $query = $db->prepare($sql);
            $query->execute([
                'i' => $voitures->idvoiture,
                'n' => $voitures->nom_voiture,
                'k' => $voitures->idcategorie,
                'c' => $voitures->prix,
                'url' => $voitures->url,

            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    function deletevoiture($id)
    {
        $sql = "DELETE FROM article WHERE idvoiture = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function updatevoiture($voitures, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE article SET 
                    idvoiture=:idvoiture,
                    nom_voiture = :nom_voiture,
                    idcategorie=:idcategorie, 
                    prix = :prix
                    
                WHERE idvoiture= :idvoiture'
            );
            $query->execute([
                'idvoiture' => $id,
                'nom_voiture' => $voitures->nom_voiture,
                'idcategorie' => $voitures->idcategorie,
                'prix' => $voitures->prix
                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showvoiture($id)
    {
        $sql = "SELECT * from article where idvoiture = $id";
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
