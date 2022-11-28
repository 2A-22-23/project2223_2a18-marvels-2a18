<?php
include '../Controller/ServiceC.php';
$serviceC=new ServiceC();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <title>User Display</title>
</head>
    <body>
        <button><a href="dashboard.php">Retour</a></button>
        <hr>
        
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="details">
                    <div class="recentorders">
                        <div class="cardheader">
                            <h2>Modifier service</h2>
                            </div>  
			        
        <form action="modifierService.php" method="POST">
        <?php
			if (isset($_POST['id'])){
				$services =$serviceC->recupererService($_POST['id']);
				
		?>
            <table border="1" align="center">
            <tr>
                    <td>
                        <label for="nameServ">Nom-Service:
                        </label>
                    </td>
                    <td><input type="text" name="nameServ" id="nameServ" value="<?php echo $services['nameServ']; ?>" ></td>
                    <td><input type="text" name="nameDep" id="nameDep" value="<?php echo $services['nameDep']; ?>" ></td>
                    <input type="hidden" name="id" value="<?php echo $services['id']; ?>">
                </tr>
                <tr>
                    <td>
                        <label for="price">Prix:
                        </label>
                    </td>
                    <td><input type="number" name="price" id="price" value="<?php echo $services['price']; ?>" ></td>
                </tr>
                  
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" class="btn" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" class="btn" value="Annuler" >
                    </td>
                </tr>
            </table>
            <?php
		}
		?>
        </form>

    </body>
</html>