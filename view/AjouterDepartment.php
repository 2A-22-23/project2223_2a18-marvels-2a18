<?php
include '../Controller/DepartmentC.php';
$DepartmentC=new DepartmentC();

if(
    isset($_POST['nameDep']) && !empty($_POST['nameDep']) 
    && isset($_POST['description']) && !empty($_POST['description']) 
   
){
    $Department = new department($_POST['nameDep'],$_POST['description']);
    $DepartmentC->ajouterDep($Department);
}
else
{
echo 'Erreur';
header('Location: dashboard2.php');
}
?>