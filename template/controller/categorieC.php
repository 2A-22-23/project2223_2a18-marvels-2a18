<?php
include_once '../config.php';
include '../model/categorie.php';
include '../model/voitures.php';

class categorieC
{
    


public function affichjointure()
    {
        $sql = "SELECT v.nom_voiture,v.prix ,c.nom_categorie,c.nbval,v.url FROM voitures v 
        INNER JOIN categorie c 
        ON v.id_categorie=c.idcategorie";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            $liste = $liste->fetchAll ();
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
       
    }
}
   