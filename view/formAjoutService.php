<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <title>User Display</title>
</head>
    <body>
        <button><a href="dashboard.php" class="btn">Retour</a></button>
        <hr>

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="details">
                    <div class="recentorders">
                        <div class="cardheader">
                            <h2>Ajouter Service</h2>
                            </div>   

        <form action="AjoutService.php" method="post">
            <table border="1" align="center">
            <tr>
                    <td>
                        <label for="nameServ">Nom-Service:
                        </label>
                    </td>
                    <td><input type="text" name="nameServ" id="nameServ"  maxlength="30" ></td>
                    <td><p style="color: red" id="nomEr"></p></td>
                    <input type="hidden" name="id" value="<?php echo $services['id']; ?>">
                </tr>
               

                <tr>
                    <td>
                        <label for="nameDep">Nom-Departement:
                        </label>
                    </td>
                    <td><input type="text" name="nameDep" id="nameDep" maxlength="30"  ></td>

                <td><p style="color: red" id="nomErr"></p></td>
                    <input type="hidden" name="id" value="<?php echo $services['id']; ?>">
                </tr>
               


                <tr>
                    <td>
                        <label for="price">Prix:
                        </label>
                    </td>
                    <td><input type="number" name="price" id="price" ></td>
                    <input type="hidden" name="id" value="<?php echo $services['id']; ?>">

                </tr>           
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" class="btn" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" class="btn" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
        <script src="../Conditions.js"></script>
    </body>
</html>