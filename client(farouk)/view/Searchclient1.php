<?php
include '../Controller/ClientC.php';
$clientC = new ClientC();

if (isset($_GET['nom']) && !empty($_GET['nom'])) {
    $list = $clientC->showclientt($_GET['nom']);
} else {
    $list = $clientC->listClients();
}
?>
<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <title>Document</title>

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
                    <a href="dashboard.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard1.php">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">Client</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard2.php">
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                        <span class="title">Role</span>
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
                    <div class="topbar">
                        <div class="toggle">
                            <ion-icon name="menu-outline"></ion-icon>
                        </div>
                        
                        <!---- mainImg -->
                        
                    </div>

    <div class="search">
        <form action="" method="GET">
            <input type="text" name="nom" id="nom" placeholder="Enter client name">
            <input type="submit" value="Search">
        </form>
        </div>

        
       
        <div class="rightboxx">
    <center>
        
   
    <table border="10" bordercolor="red" align="center" width="70%">
        <tr>
            <th>Id client</th>
            <th>nom</th>
            <th>prenom</th>
            <th>email</th>
            <th>telephone</th>
        </tr>
        <?php
        foreach ($list as $client) {
        ?>
            <tr>
                <td><?= $client['idc']; ?></td>
                <td><?= $client['nom']; ?></td>
                <td><?= $client['prenom']; ?></td>
                <td><?= $client['email']; ?></td>
                <td><?= $client['telephone']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    </center>
    </div>
    <style>
       .search{
        
                float:right;
               margin-right: 400px;
                width:250px;
                height:280px;
                
                margin-top: 70px;
            }
            
           

    </style>
    
</body>

</html>
