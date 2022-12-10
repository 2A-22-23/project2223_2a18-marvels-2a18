<?php
include_once '../config.php';
include '../Model/marque.php';

class marquec
{

    public function l()
    {
        $sql = "SELECT idmarque,nommarque FROM marque_model";

        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
           
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }





    public function listmarque()
    {
        $sql = "SELECT * FROM marque_model";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

     function deletemarque($id)
    {
        $sql = "DELETE FROM marque_model WHERE idmarque = :idm";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idm', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addmarque($marque)
    {
        $sql = "INSERT INTO marque_model  
        VALUES (NULL,:ma,:mo)";
        $db = config::getConnexion();
        try {
           
            $query = $db->prepare($sql);
            $query->execute([
                'ma' => $marque->getmarque(),
                'mo' => $marque->getmodel(),

            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updatemarque($marque, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                "UPDATE marque_model SET 
                    nommarque = :nommarque, 
                    nommodel= :nommodel
                WHERE idmarque= :idmarque"
            );
            $query->execute([
                'idmarque' => $id,
                'nommarque' => $marque->getmarque(),
                'nommodel' => $marque->getmodel()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
            
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showmarque($id)
    {
        $sql = "SELECT * from marque_model where idmarque = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $marque = $query->fetch();
            return $marque;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    } 





    
     function showmarquee($nommarque)
    {
        $sql = "SELECT * FROM marque_model WHERE nommarque LIKE '%" . $nommarque . "%'";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $marque = $query->fetchAll();
            return $marque;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    } 

    
    public function listmarquee()
    {
        $sql = "SELECT * FROM marque_model";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
 

}
