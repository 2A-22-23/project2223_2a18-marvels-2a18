<?php
	include '../config.php';
	include_once '../Model/Reponse.php';
	
	
	
	class ReponseC {


		function afficherService(){
			$sql="SELECT * FROM reponses";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}

		
		function supprimerService($IdRep){
			$sql="DELETE FROM reponses WHERE IdRep=:IdRep";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':IdRep', $IdRep);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}

        function ajouterservices($services){

            $sql = "INSERT INTO reponses (id, Reponse) VALUES (:id, :Reponse)";
         $db = config::getConnexion();                 
         try{
             $query = $db->prepare($sql);
             $query->execute([
				 'id'=> $services->getSujet(),
                 'Reponse'=> $services->getDetails()
             ]);
             header("Location: ../view/formAjoutReponse.php");
     } catch (PDOExeption $e){
         $e->getMessage();
     }
     
         }
		function recupererService($IdRep){
			$sql="SELECT * from reponses where IdRep=$IdRep";
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
		
		function modifierService($id, $Reponse, $IdRep){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					"UPDATE reponses SET 
					    id = :id, 
						Reponse = :Reponse
					WHERE IdRep = :IdRep"
				);
				$query->execute([
					'id' => $id,
                    'Reponse' => $Reponse,
					'IdRep' => $IdRep
				]);
				header("Location: ../view/dashboard.php");
				echo $query->rowCount() . " records UPDATED successfully <br>";

			} catch (PDOException $e) {
				die($e->getMessage());
			}
		}

	}
?>