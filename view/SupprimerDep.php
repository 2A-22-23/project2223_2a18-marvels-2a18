

<?php
	include '../Controller/DepartmentC.php';
	$DepartmentC=new DepartmentC();
	$DepartmentC->supprimerDep($_POST["idDep"]);
	header('Location:dashboard2.php');
?>