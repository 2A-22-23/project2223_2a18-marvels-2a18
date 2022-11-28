<?php
include '../Controller/DepartmentC.php';
$idDep = $_POST["idDep"];
var_dump($idDep);
$DepartmentC = new DepartmentC();
if(
    ($_POST['nameDep']) !== null && !empty($_POST['nameDep'])
    
){
    // $services = new services($_POST['id'],$_POST['nameServ'],($_POST['price']) );
    $DepartmentC->modifierDepartment($_POST['nameDep'] , $idDep);
}else{ 
    echo 'Erreur';
    header('Location: dashboard2.php');
}
?> 
