<?php
    require_once('config.php');
    session_start();
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $stmt = $pdo->prepare("SELECT journal.date, journal.quantite, aliments.nom, journal.id FROM journal 
                               LEFT JOIN aliments ON journal.id_aliment = aliments.id
                               WHERE journal.id_utilisateur = :id_user");  
        $stmt->bindParam(':id_user', $_SESSION['user_id']);
        $stmt->execute();
        $journals = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($journals);
    } 
?>