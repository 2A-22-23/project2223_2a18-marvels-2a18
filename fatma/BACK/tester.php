<?php

class config
{
    private static $pdo = null;

    public static function getConnexion()
    {
        if (!isset(self::$pdo)) {
            try {
                self::$pdo = new PDO(
                    'mysql:host=localhost;dbname=marvels auto','root','',
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                    ]
                );
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}
//$conn = new PDO('mysql:host=localhost;dbname=reclamations;charset=utf8', 'root', '');
$sql ="SELECT * FROM reclamations";
$stmt = $conn->prepare($sql);
$stmt->execute();

while($row = $stmt->fetch())
{
    echo $row['id'].'<br />';
}






?>