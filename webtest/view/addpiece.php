<?php
    include '../Controller/piecesc.php';
    include '../Controller/marquec.php';
    require('reCaptha/autoload.php');

    $error = "";
    // create client
    $piece = null;
    $marque = null;
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0)
    {
            // Testons si le fichier n'est pas trop gros
            if ($_FILES['image']['size'] <= 8000000)
            {
                    // Testons si l'extension est autorisée
                    $fileInfo = pathinfo($_FILES['image']['name']);

                    $extension = $fileInfo['extension'];
                    $allowedExtensions = ['jpg', 'jpeg', 'png'];

                    $_FILES['image']['name']=$_POST["nom"].'.'.$extension;
                   
                    if (in_array($extension, $allowedExtensions))
                    {
                            // On peut valider le fichier et le stocker définitivement
                            move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/' . basename($_FILES['image']['name']));
                            $url = basename($_FILES['image']['name']);
            
                    }
            }
            
    }
    
    $marquec = new marquec();
    $l=$marquec->l();
    // create an instance of the controller
    $piecec = new piecec();
    if (
        isset($_POST["nom"]) &&
        /* isset($_POST["marque"]) && */
        isset($_POST["description"]) &&
        isset($_POST["prix"]) &&
        isset($_POST["marque"]) &&
        isset($_POST["qte"])
    ) {
        if (
            !empty($_POST['nom']) &&
        /*  !empty($_POST["marque"]) && */
            !empty($_POST["description"]) &&
            !empty($_POST["prix"]) &&
            !empty($_POST["marque"]) &&
            !empty($_POST["qte"])&&
            !empty($_POST["g-recaptcha-response"])
        ) {
           
            $piece = new piece(
                null,
                $_POST['nom'],
            /*  $_POST['marque'], */
                $_POST['description'],
                $_POST['prix'],
                $_POST['qte'],
                $_POST['marque'],
                $url)
            ;
            $piecec->addpiece($piece);
            
        header('Location:dashboardc2.php');  
        } else
            $error = "Missing information";
    }
    if(isset($_POST['submitpost'])){
        if(isset($_POST['g-recaptcha-response'])){
    
        $recaptcha = new \ReCaptcha\ReCaptcha('6LfkrVcjAAAAANaCkPzaDvoE8PyE5ysqJ-gRYx3j');
        $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
    if ($resp->isSuccess()) {
        
        var_dump('Captcha valide');
        // Verified!
        } else {
            $errors = $resp->getErrorCodes();
            var_dump('Captcha invalide');
            var_dump($errors);
    }
            }else{
            var_dump('captcha non rempli');
        }
        }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="dashboard.css">
        <title>Back with piece</title>
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
                <div class="details">
                    <div class="recentorders">
                        <div class="recentorders">
                            <div class="cardheader">
                                <h2>Ajouter une piece</h2>
                            </div>
                            <form action="" method="POST"  onsubmit="return (piece());" enctype="multipart/form-data">
                                <table border="1" align="center">
                                    <tr>
                                        <td>
                                            <label for="nom">nom de la piece:
                                            </label>
                                        </td>
                                        <td>
                                            <input type="text" name="nom" id="nom" maxlength="20" placeholder="donner un nom">
                                        </td>
                                        <td><p style="color: red" id="nomEr"></p></td> 
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="description">description:
                                            </label>
                                        </td>
                                        <td>
                                            <input type="text" name="description" id="description" maxlength="100" placeholder="donner une description">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="prix">prix:
                                            </label>
                                        </td>
                                        <td>
                                            <input type="number" name="prix" id="prix">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="qte">qte:
                                            </label>
                                        </td>
                                        <td>
                                            <input type="number" name="qte" id="qte">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="marque">marque: </label>
                                        </td>
                                        <td>
                                            <select name="marque" id="marque">
                                                <?php foreach ($l as $marque ){?>
                                                    <option value="<?= $marque['idmarque']?>"><?= $marque['nommarque']?></option>
                                                <?php }?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="image">image: </label>
                                        </td>
                                        <td>
                                        <input type="file" id="image" name="image" value="importer une image"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <form  method="POST">
                                        <div class="g-recaptcha" data-sitekey="6LfkrVcjAAAAAMxHVb3y4jI1aKhBo2gIHp1IrEZq"></div>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <input type="submit" value="Save" class="btn">
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
let n = document.getElementById("nom");
var letters = /^[A-Za-z]+$/;

            function piece() {
    if (n.value.length < 3) {
        lNameError = " Le nom doit compter au minimum 3 caractères.";
        document.getElementById("nomEr").innerHTML = lNameError;

        return false;
    }
    if (!n.value.match(letters)) {
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
                list.forEach((item)=>item.classList.remove('hovered'));
                this.classList.add('hovered')
            }
            list.forEach((item)=>item.addEventListener('mouseover',activeLink));
        </script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </body>
</html>