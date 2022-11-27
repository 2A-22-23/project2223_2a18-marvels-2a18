<?php
include '../config.php';
include '../model/role.php';

class roleC
{

public function Listerole()
    {
        $sql = "SELECT * FROM role";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function addrole ($role)
    { 
        
        $sql = "INSERT INTO role 
        VALUES (:i,:n)";//,:c
        $db = config::getConnexion(); //fonction statique
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'i' => $role->idrole,
                'n' => $role->role,
                /* 'c' => $role->idclient, */
               
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    } 
    function delete($id)
    {
        $sql = "DELETE FROM role WHERE idrole = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function updaterole($role, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE role SET 
                    idrole=:idrole,
                    role = :role, 
/*                     idclient = :idclient
 */                    
                WHERE idrole= :idrole'
            );
            $query->execute([
                'idrole' => $id,
                'role' => $role->role,
               // 'idclient' => $role->idclient
                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showrole($id)
    {
        $sql = "SELECT * from role where idrole = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $role = $query->fetch();
            return $role;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }   
    }

}
    ?>
