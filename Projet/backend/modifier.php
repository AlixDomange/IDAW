<?php
    require_once('config.php');
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $stmt = $pdo->prepare("UPDATE utilisateur SET prenom=:prenom, age=:age, sexe=:sexe, sport=:sport, objectif=:objectif WHERE id=:id");
            $stmt->bindParam(':id', $_SESSION['user_id']);
            $stmt->bindParam(':prenom', $_POST['prenom']);
            $stmt->bindParam(':age', $_POST['age']);
            $stmt->bindParam(':sexe', $_POST['sexe']);
            $stmt->bindParam(':sport', $_POST['sport']);
            $stmt->bindParam(':objectif', $_POST['objectif']);
            $_SESSION['prenom'] = $_POST['prenom'];
            $_SESSION['objectif'] = $_POST['objectif'];
            $_SESSION['sport'] = $_POST['sport'];
            $_SESSION['sexe'] = $_POST['sexe'];
            $_SESSION['age'] = $_POST['age'];
            http_response_code(201);
            $stmt->execute();
    }
?>