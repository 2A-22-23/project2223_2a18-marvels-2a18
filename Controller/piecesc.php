<?php
include '../config.php';
include '../Model/piece.php';

class pieceC
{
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
        VALUES (NULL,:n, /* :m, */ :d, :p,:q,:m)";
        $db = config::getConnexion();
        try {
           
            $query = $db->prepare($sql);
            $query->execute([
                'n' => $piece->getName(),
                /* 'm' => $piece->getmarque(), */
                'd' => $piece->getdescription(),
                'p' => $piece->getprix(),
                'q' => $piece->getqte(),
                'm' => $piece->getmarque()
               
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
                    /* marque = :marque,  */
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
