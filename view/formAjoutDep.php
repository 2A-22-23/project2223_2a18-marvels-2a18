<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <title>User Display</title>
</head>
    <body>
        <button><a href="dashboard2.php" class="btn">Retour</a></button>
        <hr>

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="details">
                    <div class="recentorders">
                        <div class="cardheader">
                            <h2>Ajouter Departement</h2>
                            </div>   

        <form action="AjouterDepartment.php" method="post">
            <table border="1" align="center">
            <tr>
                    <td>
                        <label for="nameDep">Nom-Departement:
                        </label>
                    </td>
                    <td><input type="text" name="nameDep" id="nameDep" ></td>
                    <input type="hidden" name="idDep" value="<?php echo $department['idDep']; ?>">
                </tr>
               
                      
                <tr>
                    <td></td>
                    <td>
                        <input  type="submit" class="btn" value="Envoyer"> 
                    </td>
                    <td>
                        <input  type="reset" class="btn" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
    
</html>