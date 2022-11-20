<?php
include '../config.php';
include '../model/categorie.php';

class categorieC
{
    function showcategorie($type)
    {
        $sql = "SELECT * FROM categorie WHERE type LIKE '%" . $type . "%'";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $categories = $query->fetchAll();
            return $categories;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    function upcomingcategorie()
    {
        echo date("Y/m/d");
        $sql = "SELECT * FROM categorie WHERE dateajout >= '" . date("Y-m-d") . "'";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $categories = $query->fetchAll();
            return $categories;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function listcategories()
    {
        $sql = "SELECT * FROM categorie";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function bookcategorie($idcategorie, $idvoiture)
    {
        $sql = "INSERT INTO reservation  
        VALUES (NULL, :idvoiture,:idcategorie)";

        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'idvoiture' => $idvoiture,
                'idcategorie' => $idcategorie
            ]);
            $categorie = $this->getcategorie($idcategorie);
            echo $categorie['nbval'] - 1;
            $query = $db->prepare(
                'UPDATE categorie SET nbval = ' . $categorie['nbval'] - 1
                    . ' WHERE idcategorie= ' . $idcategorie
            );
            $query->execute();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function getcategorie($id)
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
