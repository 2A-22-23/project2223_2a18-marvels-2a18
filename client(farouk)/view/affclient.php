<?php
include '../Controller/ClientC.php';
$clientC = new ClientC();
$list = $clientC->listClients();
?>
<html>

<head>          



</head>

<body>

    <center>
        <h1>List of clients</h1>
        <h2>
            
    <button class="btn"><a href="addClient.php">Add Client</a></button>

        </h2>
    </center>
    <table border="1" bordercolor="#fd2600" align="center" width="70%">
        <tr>
            <th>Id Client</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>EMAIL</th>
            <th>MDP</th>
            <th>TELEPHONE</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $client) {
        ?>
            <tr>
                <td><?= $client['idc']; ?></td>
                <td><?= $client['nom']; ?></td>
                <td><?= $client['prenom']; ?></td>
                <td><?= $client['email']; ?></td>
                <td><?= $client['mdp']; ?></td>
                <td><?= $client['telephone']; ?></td>
                <td align="center">
                    <form method="POST" action="updateClient.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $client['idc']; ?> name="id">
                    </form>
                </td>
                <td>
                   <button> <a href="deleteClient.php?id=<?php echo $client['idc']; ?>">Delete</a></button>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>