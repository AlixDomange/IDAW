<?php
    require_once('config.php');
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $stmt = $pdo->prepare("UPDATE aliments SET nom=:nom, type=:type, glucide=:glucide, proteine=:proteine, lipide=:lipide, sucre=:sucre, sel=:sel WHERE id=:id");
            $stmt->bindParam(':id', $_POST['id']);
            $stmt->bindParam(':nom', $_POST['nom']);
            $stmt->bindParam(':type', $_POST['type']);
            $stmt->bindParam(':glucide', $_POST['glucide']);
            $stmt->bindParam(':proteine', $_POST['proteine']);
            $stmt->bindParam(':lipide', $_POST['lipide']);
            $stmt->bindParam(':sucre', $_POST['sucre']);
            $stmt->bindParam(':sel', $_POST['sel']);
            http_response_code(201);
            $stmt->execute();
    }
?>