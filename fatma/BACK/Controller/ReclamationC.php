<?php
	include '../config.php';
	include_once '../Model/Reclamation.php';
	
	
	
	class ReclamationC {


		function afficherService(){
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

		

        function ajouterservices($services){

            $sql = "INSERT INTO reclamations (Details, IdClient, Email) VALUES (:Details, :IdClient, :Email)";
         $db = config::getConnexion();                 
         try{
             $query = $db->prepare($sql);
             $query->execute([
				 'Details'=> $services->getDetails(),
				 'IdClient'=> $services->getIdClient(),
				 'Email'=> $services->getEmail()
             ]);
             header("Location: ../view/formAjoutReclamation.php");
     } catch (PDOExeption $e){
         $e->getMessage();
     }
     
         }
		 
		function recupererService($id){
			$sql="SELECT * from reclamations where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$services=$query->fetch();
				return $services;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		

	}
?>