<?php
    include '../Controller/marquec.php';
    $error = "";
    // create client
    $marque = null;
    // create an instance of the controller
    $marquec = new marquec();
    if (
        isset($_POST["idmarque"]) &&
        isset($_POST["nommarque"]) &&
        isset($_POST["nommodel"])
    ) {
        if (
            !empty($_POST["idmarque"]) &&
            !empty($_POST['nommarque']) &&
            !empty($_POST["nommodel"])
        ) {
            $marque = new marque(
                $_POST['idmarque'],
                $_POST['nommarque'],
                $_POST['nommodel']
            );
            $marquec->updatemarque($marque, $_POST["idmarque"]);
            echo "test";
            var_dump($_POST["idmarque"]); 
            header('Location:dashboardc3.php');
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
        <title>Back with mo</title>
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
                    if (isset($_POST['idmarque'])) {
                    $marque = $marquec->showmarque($_POST['idmarque']);
                ?>
                <div class="details">
                    <div class="recentorders">
                        <div class="recentorders">
                            <div class="cardheader">
                                <h2>Modifier une marque</h2>
                            </div>
                            <form action="" method="POST" class="form" onsubmit="return (nameValidation());">
                                <table border="1" align="center" bordercolor="red">
                                    <tr>
                                        <td>
                                            <label for="idmarque">Id de la marque:</label>
                                        </td>
                                        <td><input readonly type="number" name="idmarque" id="idmarque" value="<?php echo $marque['idmarque']; ?>" ></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="nommarque"> nom de la marque:</label>
                                        </td>
                                        <td><input type="text" name="nommarque" id="nommarque" value="<?php echo $marque['nommarque']; ?>"></td>
                                        <td><p style="color: red" id="nomEr"></p></td> 
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="nommodel">nom du model:</label>
                                        </td>
                                        <td>
                                            <input type="text" name="nommodel" value="<?php echo $marque['nommodel']; ?>" id="nommodel" >
                                        </td>
                                        <td><p style="color: red" id="nomErr"></p></td> 
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="submit" value="Update" class="btn">
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
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
       
        <?php } ?>

        <script>
           
            let lNameInput = document.getElementById("nommarque");
            let lName = document.getElementById("nommodel");
            var letters = /^[A-Za-z]+$/;

            function nameValidation() {
                if (lNameInput.value.length < 3) {
                    lNameError = " Le nom doit compter au minimum 3 caractères.";
                    document.getElementById("nomEr").innerHTML = lNameError;
                    return false;
                }
                if (!lNameInput.value.match(letters)) {
                    lNameError2 = "Veuillez entrer un nom valid ! (seulement des lettres)";
                    lNameValid2 = false;
                    document.getElementById("nomEr").innerHTML = lNameError2;
                    return false;
                }
                document.getElementById("nomEr").innerHTML =
                    "<p style='color:green'> Correct </p>";
                if (lName.value.length < 3) {
                    lNameError = " Le nom doit compter au minimum 3 caractères.";
                    document.getElementById("nomErr").innerHTML = lNameError;

                    return false;
                }
                document.getElementById("nomErr").innerHTML =
                    "<p style='color:green'> Correct </p>";

                return true;
            }

  </script>

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

    
 
    </body>
</html>