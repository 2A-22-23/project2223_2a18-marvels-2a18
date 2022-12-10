<?php
include_once '../config.php';
include '../model/categorie.php';

class categorieC
{ 
    public function Listerole1()
    {
        $sql = "SELECT idvoiture,nom_categorie FROM article";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function affichjointure()
    {
        $sql = "SELECT v.nom_voiture,v.prix ,c.nom_categorie,c.nbval,v.url FROM article v 
        INNER JOIN categorie c 
        ON v.idcategorie=c.idcategorie";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            $liste = $liste->fetchAll ();
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }

    }
    
    function tri($recherche)
    {
       
        $sql ='SELECT * FROM categorie WHERE nom_categorie LIKE "%'.$recherche.'%" ';
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $list = $query->fetchAll();
            return $list;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }


public function listcategorie()
    {
        $sql = "SELECT * FROM categorie";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function addcategorie ($categorie)
    { 
        
        $sql = "INSERT INTO categorie  
        VALUES ( :id,:t,:nb)";
        $db = config::getConnexion(); //fonction statique
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'id' => $categorie->idcategorie,
                't' => $categorie->nom_categorie,
                'nb' => $categorie->nbval,
               
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    } 
    function deletecategorie($id)
    {
        $sql = "DELETE FROM categorie WHERE idcategorie = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function updatecategorie($categorie, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE categorie SET 
                    idcategorie=:idcategorie,
                    nom_categorie = :nom_categorie, 
                    nbval = :nbval
                    
                WHERE idcategorie= :idcategorie'
            );
            $query->execute([
                'idcategorie' => $id,
                'nom_categorie' => $categorie->nom_categorie,
                'nbval' => $categorie->nbval
                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showcategorie($id)
    {
        $sql = "SELECT * from categorie where idcategorie = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $categorie = $query->fetch();
            return $categorie;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }   
    }

}
    ?>
