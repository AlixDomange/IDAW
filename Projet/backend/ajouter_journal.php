<?php
require_once('config.php');
session_start(); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $type = $_POST["date"];
    $sucre = $_POST["quantite"];
    try {
        $sql = "INSERT INTO journal (id_utilisateur, id_aliment, date, quantite) 
                VALUES (:id_utilisateur, :id_aliment, :date, :quantite)";
        $query = $pdo->prepare($sql);
        $query->bindParam(":id_utilisateur", $_SESSION['id']);
        $query->bindParam(":id_aliment", $id);
        $query->bindParam(":date", $date);
        $query->bindParam(":quantite", $quantite);
        $query->execute();
    } catch (PDOException $e) {
        echo "Erreur PDO : " . $e->getMessage();
    } finally {
        $pdo = null;
    }
}
?>