

<?php
	include '../Controller/ServiceC.php';
	$serviceC=new ServiceC();
	$serviceC->supprimerService($_POST["id"]);
	header('Location:dashboard.php');
?>