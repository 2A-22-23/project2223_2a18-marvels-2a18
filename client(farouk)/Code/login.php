<?php
session_start();
$host ="localhost";
$username ="root";
$password ="";
$database ="user";
$message ="";

try{
$connect =new PDO( "mysql:host=$host; dbname=$database",$username,$password);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST["button"])) 
{
    if(empty($_POST["email"]) || empty($_POST["mdp"])   )
{
    $message='<label>Veuillez remplir tout les champs</label>';


}
else{
    $query="SELECT * FROM user WHERE email=:email AND mdp=:mdp";
    $statement =$connect->prepare($query);
    $statement->execute(
array(
'email'=> $_POST["email"],
'mdp' => $_POST["mdp"],
/* 'id' => $_POST["id"] */


)

    );
    $count=$statement->rowCount();
    if($count >0)
    { if($user["idrole"] ==1){
        $_SESSION["email"]=$user["email"];
      header("location:../view/dashboard.php");
   }else 
   {
        
        
        $_SESSION["email"]=$_POST["email"];
        header("location:indexx.php");}
}
else
{
$message='<label>Email ou mot de passe incorrect</label>';

}
    }
}       
}
catch(PDOException $error)
{

    $message=$error->getMessage();
}




?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Connection</title>
    <link rel="stylesheet" href="style.css">
    <style>

body{
  width: 100%;
  height: 100vh;
  background: linear-gradient(
    to right,
    #DD5353 0%,
    #DD5353 50%,
    #DD5353 50%,
   black 100%
  );
}
.inscription-form label{
  font-size: 20px;

}
</style>
  </head>
  <body>
     
    <div class="inscription-form">
<?php
if(isset($message))
{
echo '<label class="text-danger">'.$message.'</label>';

}
?>

    <form onsubmit="return nameValidation()"  action="" method="POST" name='inscription-form' id='myForm'>
   <!--  <label>Email:</label> -->
    <input type="email" name="email"   placeholder="Email" class="box" title="*****@***.**"  ><br></br>
    <!-- <label>Mot de passe:</label> -->
    <input type="password" name="mdp"  placeholder="Mot de passe" class="box" title ="numero/majuscule/miniscule et au moins 8 caracteres"  ><br></br>
   
    <input type="submit" value="Connecter" name="button">


  </form> 
  </div>
 
  

</body>
</html>