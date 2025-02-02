<?php
    include '../Controller/piecesc.php';

    $error = "";

    // create client
    $piece = null;

    // create an instance of the controller
    $piecec = new piecec();
    if (
        isset($_POST["idpiece"]) &&
        isset($_POST["nompiece"]) &&
        /* isset($_POST["marque"]) && */
        isset($_POST["description"]) &&
        isset($_POST["prix"]) &&
        isset($_POST["marque"]) &&
        isset($_POST["qte"])
    ) {
        if (
            !empty($_POST["idpiece"]) &&
            !empty($_POST['nompiece']) &&
        /*  !empty($_POST["marque"]) && */
            !empty($_POST["description"]) &&
            !empty($_POST["prix"]) &&
            !empty($_POST["marque"]) &&
            !empty($_POST["qte"])
        ) {
            $piece = new piece(
                $_POST['idpiece'],
                $_POST['nompiece'],
            /*    $_POST['marque'], */
                $_POST['description'],
                $_POST['prix'],
                $_POST['qte'],
                $_POST['marque'],
                $url
            );
            $piecec->updatepiece($piece, $_POST["idpiece"]);
            echo "test";
            var_dump($_POST["idpiece"]); 
            header('Location:dashboardc2.php');
        } else
            $error = "Missing information";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="dashboard.css">
        <title>Back with client</title>
    </head>
    <body>
        <div class="container">
            <div class="navigation">
                <ul>
                    <li>
                        <a href="dashboard.php">
                            <span class="icon"><ion-icon name="albums-outline"></ion-icon></span>
                            <span class="title">Marvels Auto</span>
                        </a>
                    </li>
                    <li>
                        <a href="MainDashboard.php">
                            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboardc2.php">
                            <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                            <span class="title">pieces</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboardc3.php">
                            <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                            <span class="title">marques</span>
                        </a>
                    </li> 
                    <li>
                        <a href="#">
                            <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>
                            <span class="title">Help</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                            <span class="title">Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                            <span class="title">Sing Out</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="main">
                <div id="error">
                    <?php echo $error; ?>
                </div>
                <div class="topbar">
                    <div class="toggle">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>
                </div>
                <?php
                    if (isset($_POST['idpiece'])) {
                    $piece = $piecec->showpiece($_POST['idpiece']);
                ?>
                <div class="details">
                    <div class="recentorders">
                        <div class="recentorders">
                            <div class="cardheader">
                                <h2>Modifier une piece</h2>
                            </div>
                            <form action="" method="POST" onsubmit="return (uppiece());">
                                <table border="1" align="center" bordercolor="red">
                                    <tr>
                                        <td>
                                            <label for="idpiece">Id de la piece:
                                            </label>
                                        </td>
                                        <td><input readonly type="number" name="idpiece" id="idpiece" value="<?php echo $piece['idpiece']; ?>" ></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="nompiece"> nom de la piece:
                                            </label>
                                        </td>
                                        <td><input type="text" name="nompiece" id="nompiece" value="<?php echo $piece['nompiece']; ?>"></td>
                                        <td><p style="color: red" id="nomEr"></p></td> 
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="description">description:
                                            </label>
                                        </td>
                                        <td>
                                            <input type="text" name="description" value="<?php echo $piece['description']; ?>" id="description" maxlength="100">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="prix">prix:
                                            </label>
                                        </td>
                                        <td>
                                            <input type="number" name="prix" id="prix" value="<?php echo $piece['prix']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="qte">quantite:
                                            </label>
                                        </td>
                                        <td>
                                            <input type="number" name="qte" id="qte" value="<?php echo $piece['qte']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="marque">marque:
                                            </label>
                                        </td>
                                        <td>
                                            <input type="number" name="marque" id="marque" value="<?php echo $piece['marque']; ?>">
                                        </td>
                                    </tr>
                                    <tr>    
                                        <td>
                                            <input type="submit" value="Update"class="btn">
                                            </td>
                                        <td>
                                            <input type="reset" value="Reset" class="btn">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        <script>
            let m = document.getElementById("nompiece");
            var letters = /^[A-Za-z]+$/;
           function uppiece() {
    if (m.value.length < 3) {
        lNameError = " Le nom doit compter au minimum 3 caractères.";
        document.getElementById("nomEr").innerHTML = lNameError;

        return false;
    }
    if (!m.value.match(letters)) {
        lNameError2 = "Veuillez entrer un nom valid ! (seulement des lettres)";
        lNameValid2 = false;
        document.getElementById("nomEr").innerHTML = lNameError2;
        return false;
    }
    document.getElementById("nomEr").innerHTML =
        "<p style='color:green'> Correct </p>";

    return true;
}
        </script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script>
            //Menu Toggle
            let toggle = document.querySelector(".toggle");
            let navigation = document.querySelector('.navigation');
            let main= document.querySelector('.main');

            toggle.onclick = function(){
                navigation.classList.toggle("active");
                main.classList.toggle("active")
            }

            //adding hoverd class in selected div ! 
            let list =document.querySelectorAll(".navigation li");
            function activeLink(){
                list.forEach((item)=>
                item.classList.remove('hovered'));
                this.classList.add('hovered')
            }
            list.forEach((item)=> 
            item.addEventListener('mouseover',activeLink));
        </script>
        <?php } ?>
        <script src="validation.js"></script>
    </body>
</html>