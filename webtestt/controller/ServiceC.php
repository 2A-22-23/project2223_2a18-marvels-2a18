<?php
	include_once '../config.php';
	include_once '../model/Service.php';
class ServiceC
{
	public function Listerole1()
    {
        $sql = "SELECT id,nameServ FROM services";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
	function afficherService()
	{
		$sql = "SELECT * FROM services";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}

	function supprimerService($id)
	{
		$sql = "DELETE FROM services WHERE id=:id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}

	function ajouterservices($services)
	{

		$sql = "INSERT INTO services (nameServ,price, idDep) VALUES (:nameServ, :price,:idDep)";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				'nameServ' => $services->getNameServices(),
				'price' => $services->getServicePrice(),
				'idDep' => $services->getIdDep()
				//'pic'=>$services->getpic()

			]);
			header("Location: ../view/formAjoutService.php");
			  } catch (PDOExeption $e){
			$e->getMessage();
			} 

		}
		function recupererService($id)
		{
			$sql = "SELECT * from services where id=$id";
			$db = config::getConnexion();
			try {
				$query = $db->prepare($sql);
				$query->execute();

				$services = $query->fetch();
				return $services;
			} catch (Exception $e) {
				die('Erreur: ' . $e->getMessage());
			}
		}

		function modifierService($nameServ, $price, $idDep, $id)
		{
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					"UPDATE services SET 
					    nameServ = :nameServ, 
						price = :price,
						idDep= :idDep
						
					WHERE id = :id"
				);
				$query->execute([
					'nameServ' => $nameServ,
					'price' => $price,
					'idDep' => $idDep,
					'id' => $id

				]);
				header("Location: ../view/dashboard.php");
				echo $query->rowCount() . " records UPDATED successfully <br>";

			} catch (PDOException $e) {
				die($e->getMessage());
			}
		}



		function showservice($nameServ)
		{
			$sql = "SELECT * FROM services WHERE nameServ LIKE '%" . $nameServ . "%'";
			$db = config::getConnexion();
			try {
				$query = $db->prepare($sql);
				$query->execute();

				$services = $query->fetchAll();
				return $services;
			} catch (Exception $e) {
				die('Error: ' . $e->getMessage());
			}
		}


		function listservice()
		{
			$sql = "SELECT * FROM services";
			$db = config::getConnexion();
			try {
				$list = $db->query($sql);
				return $list;
			} catch (Exception $e) {
				die('Error:' . $e->getMessage());
			}
		}
	}

?>