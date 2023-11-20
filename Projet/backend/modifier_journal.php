<?php
    require_once('config.php');
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $stmt = $pdo->prepare("UPDATE journal SET date=:date, quantite=:quantite WHERE id=:id");
            $stmt->bindParam(':id', $_POST['id']);
            $stmt->bindParam(':date', $_POST['date']);
            $stmt->bindParam(':quantite', $_POST['quantite']);
            http_response_code(201);
            $stmt->execute();
    }
?>