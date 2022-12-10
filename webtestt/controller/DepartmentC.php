<?php
	include '../config.php';
	include_once '../model/Department.php';
	class DepartmentC {
		function afficherDep(){
			$sql="SELECT * FROM department";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			} 
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerDep($idDep){
			$sql="DELETE FROM department WHERE idDep=:idDep";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idDep', $idDep);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}

        function ajouterDep($Department){

            $sql = "INSERT INTO department (nameDep,description) VALUES (:nameDep, :description)";
         $db = config::getConnexion();                 
         try{
             $query = $db->prepare($sql);
             $query->execute([
				'nameDep'=> $Department->getNameDep(),
				'description'=>$Department->getdescription(),
             ]);
             header("Location: ../view/formAjoutDep.php");
     } catch (PDOExeption $e){
         $e->getMessage();
     }
     
         }
		function recupererDep($idDep){
			$sql="SELECT * from department WHERE idDep=$idDep";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Department=$query->fetch();
				return $Department;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierDepartment($nameDep, $idDep,$decription){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					"UPDATE department SET 
					   nameDep= :nameDep,
					description= :description
						
					WHERE idDep = :idDep"
				);


			
				$query->execute([
					
                    'nameDep' => $nameDep,
	
				
					'description'=>$decription,
					'idDep' => $idDep
				]);
				header("Location: ../view/dashboard2.php");
				echo $query->rowCount() . " records UPDATED successfully <br>";

			} catch (PDOException $e) {
				die($e->getMessage());
			}
		}

	}
?>