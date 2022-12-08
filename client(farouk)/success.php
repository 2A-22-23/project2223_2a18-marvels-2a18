<?php
session_start();
if(! isset($_SESSION["email"]))
{header("location:login.php");

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
    <div>


<h1>
welcome <?php echo $_SESSION["email"];?> <br>

LOGIN SUCCESS <br></br>

</h1>



    </div>
</body>
</html>