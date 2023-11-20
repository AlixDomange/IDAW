<?php
require_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_utilisateur = $_POST["id_utilisateur"];
    $id_aliment = $_POST["id_aliment"];
    $quantite = $_POST["quantite"];
    $dateActuelle = date('Y-m-d');
    try {
 
        $sql = "INSERT INTO journal (id_utilisateur, id_aliment, date, quantite) 
                VALUES (:id_utilisateur, :id_aliment, :dateActuelle, :quantite)";
        $query = $pdo->prepare($sql);
        $query->bindParam(":id_utilisateur", $id_utilisateur);
        $query->bindParam(":id_aliment", $id_aliment);
        $query->bindParam(":dateActuelle", $dateActuelle);
        $query->bindParam(":quantite", $quantite);
        $query->execute();

        header('Location: ../frontend/index.php?page=journal');
        exit();
    } catch (PDOException $e) {
        echo "Erreur PDO : " . $e->getMessage();
    } finally {
        $pdo = null;
    }
}
?>