<?php
include '../Controller/DepartmentC.php';
$DepartmentC=new DepartmentC();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <title>User Display</title>
</head>
    <body>
        <button><a href="dashboard2.php">Retour</a></button>
        <hr>
        
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="details">
                    <div class="recentorders">
                        <div class="cardheader">
                            <h2>Modifier Departement</h2>
                            </div>  
			        
        <form action="ModifierDep.php" method="POST">
        <?php
			if (isset($_POST['idDep'])){
				$department =$DepartmentC->recupererDep($_POST['idDep']);
				
		?>
            <table border="1" align="center">
            <tr>
                    <td>
                        <label for="nameDep">Nom-Departement:
                        </label>
                    </td>
                    <td>
                        <label for="description">Description:
                        </label>
                    </td>
                    <td><input type="text" name="nameDep" id="nameDep" value="<?php echo $department['nameDep']; ?>" ></td>
                    <td>
                        <label for="description">Description:
                        </label>
                    </td>
                    <td><input type="text" name="description" id="description" value="<?php echo $department['description']; ?>" ></td>
                    <input type="hidden" name="idDep" value="<?php echo $department['idDep']; ?>">
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