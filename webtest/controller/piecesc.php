<?php
include_once '../config.php';
include '../Model/piece.php';

class pieceC
{
    public function Listerole1()
    {
        $sql = "SELECT idpiece,nompiece FROM piece";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    public function listpieces()
    {
        $sql = "SELECT * FROM piece";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

     function deletepiece($id)
    {
        $sql = "DELETE FROM piece WHERE idpiece = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addpiece($piece)
    {
        $sql = "INSERT INTO piece  
        VALUES (NULL,:n, :d, :p,:q,:m,:url)";
        $db = config::getConnexion();
        try {
           
            $query = $db->prepare($sql);
            $query->execute([
                'n' => $piece->getName(),
                'd' => $piece->getdescription(),
                'p' => $piece->getprix(),
                'q' => $piece->getqte(),
                'm' => $piece->getmarque(),
                'url' => $piece->geturl()
               
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updatepiece($piece, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                "UPDATE piece SET 
                    nompiece = :nompiece, 
                    description = :description, 
                    prix = :prix,
                    qte = :qte,
                    marque = :marque
                WHERE idpiece= :idpiece"
            );
            $query->execute([
                'idpiece' => $id,
                'nompiece' => $piece->getName(),
                /* 'marque' => $piece->getmarque(), */
                'description' => $piece->getdescription(),
                'prix' => $piece->getprix(),
                'qte' => $piece->getqte(),
                'marque' => $piece->getmarque()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
            
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showpiece($id)
    {
        $sql = "SELECT * from piece where idpiece = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $piece = $query->fetch();
            return $piece;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    } 
}
