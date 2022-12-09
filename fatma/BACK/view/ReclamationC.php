<?php
	include '../config.php';
	include_once '../Model/Reclamation.php';
	
	
	
	class ReclamationC {


		function afficherReclamation(){
			$sql="SELECT * FROM reclamations";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
    }

?>