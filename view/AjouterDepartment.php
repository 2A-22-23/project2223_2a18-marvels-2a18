<?php
include '../Controller/DepartmentC.php';
$DepartmentC=new DepartmentC();

if(
    isset($_POST['nameDep']) && !empty($_POST['nameDep'])
   
){
    $Department = new department($_POST['nameDep']);
    $DepartmentC->ajouterDep($Department);
}
else
{
echo 'Erreur';
header('Location: dashboard2.php');
}
?>