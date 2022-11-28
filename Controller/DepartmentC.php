<?php
	include '../config.php';
	include_once '../Model/Department.php';
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

            $sql = "INSERT INTO department (nameDep) VALUES (:nameDep)";
         $db = config::getConnexion();                 
         try{
             $query = $db->prepare($sql);
             $query->execute([
				'nameDep'=> $Department->getNameDep()
			
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
		
		function modifierDepartment($nameDep, $idDep){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					"UPDATE department SET 
					    nameDep= :nameDep 
						
					WHERE idDep = :idDep"
				);
				$query->execute([
					
                    'nameDep' => $nameDep,
	
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