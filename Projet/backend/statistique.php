<?php
require_once('config.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'GET') { 
    $dateActuelle = date('Y-m-d');
    $stmt = $pdo->prepare("SELECT SUM(aliments.sucre) AS sucre,
                                SUM(aliments.sel) AS sel,
                                SUM(aliments.lipide) AS lipide,
                                SUM(aliments.proteine) AS proteine,
                                SUM(aliments.glucide) AS glucide
                           FROM aliments 
                           LEFT JOIN journal ON aliments.id = journal.id_aliment
                           WHERE aliments.id = :id_user AND journal.date = :date");
    $stmt->bindParam(':id_user', $_SESSION['user_id']);
    $stmt->bindParam(':date', $dateActuelle);
    $stmt->execute();
    $aliments = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
    echo json_encode($aliments);
}

?>