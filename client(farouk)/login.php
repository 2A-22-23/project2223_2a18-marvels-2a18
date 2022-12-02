<?php
session_start();
include "connect.php";
if(isset($_POST["login"])){
if($_POST["email"]=="" or $_POST["mdp"]="")
{echo "<center> <h1>veuillez remplire tout les champs</h1></center>";
}else {
$email=trim($_POST["email"]);
$mdp=strip_tags(trim($_POST["mdp"]));
$query=$db->prepare("SELECT * FROM login WHERE email=? AND mdp=?");
$query->execute(array($email,$mdp));
$control=$query->fetch(PDO::FETCH_OBJ);
if ($control>0)
{$_SESSION["email"]=$email;
  header("Location:success.php");
}
echo "<center><h1>email ou mdp incorrect</h1></center>";

}



}

?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 <div class="farouk">
<form action="">
  <p>
<label for="">Email</label>
<input name="email" type="email">
</p>
<p>
<label for="">mdp</label>
<input name="mdp" type="password">
</p>
 <button type="submit" name="login">Login</button> 





</form>



 </div>
</body>
</html>