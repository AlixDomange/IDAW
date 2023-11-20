<?php
require_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $type = $_POST["type"];
    $sucre = $_POST["sucre"];
    $sel = $_POST["sel"];
    $lipide = $_POST["lipide"];
    $glucide = $_POST["glucide"];
    $proteine = $_POST["proteine"];

    try {
 
        $sql = "INSERT INTO aliments (nom, type, sucre, sel, lipide, glucide, proteine) 
                VALUES (:nom, :type, :sucre, :sel, :lipide, :glucide, :proteine)";

        $query = $pdo->prepare($sql);

        $query->bindParam(":nom", $nom);
        $query->bindParam(":type", $type);
        $query->bindParam(":sucre", $sucre);
        $query->bindParam(":sel", $sel);
        $query->bindParam(":lipide", $lipide);
        $query->bindParam(":glucide", $glucide);
        $query->bindParam(":proteine", $proteine);
        $query->execute();

        header('Location: ../frontend/index.php?page=aliments');
        exit();
    } catch (PDOException $e) {
        echo "Erreur PDO : " . $e->getMessage();
    } finally {
        $pdo = null;
    }
}
?>