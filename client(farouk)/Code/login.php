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
    $statement->excute(
array(
'email'=> $_POST["email"],
'mdp' => $_POST["mdp"]

)

    );
    $count=$statement->rowCount();
    if($count >0)
    { $_SESSION["email"]=$_POST["email"];
        header("location:connected.php");
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