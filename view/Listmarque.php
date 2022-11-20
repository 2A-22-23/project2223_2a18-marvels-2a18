<?php
include '../controller/marquec.php';
$marquec = new marquec();
$list = $marquec->listmarque();
?>
<html>

<head></head>

<body>

    <center>
        <h1>List of marques</h1>
        <h2>
            <a href="addmarque.php">Add marque</a> 
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id de de la marque</th>
            <th>nom de la marque</th>
            <th>nom du model</th>
            <th>Update</th>
            <th>Delete</th> 
        </tr>
        <?php
        foreach ($list as $marque) {
        ?>
            <tr>
                <td><?= $marque['idmarque']; ?></td>
                <td><?= $marque['nommarque']; ?></td>
                <td><?= $marque['nommodel']; ?></td>

                <td align="center">
                    <form method="POST" action="updatemarque.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $marque['idmarque']; ?> name="idmarque">
                    </form>
                </td>
                <td>
                    <a href="deletemarque.php?idmarque=<?php echo $marque['idmarque']; ?>">Delete</a>
                </td> 
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>