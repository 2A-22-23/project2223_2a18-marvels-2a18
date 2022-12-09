
<?php
	include '../Controller/ReponseC.php';
	$reponseC=new ReponseC();
	$reponseC->supprimerService($_POST["IdRep"]);
	header('Location:dashboard.php');
?>