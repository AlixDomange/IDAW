<?php
    require_once('config.php');
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
        $data = json_decode(file_get_contents("php://input"));
        $id = $data->id ?? null;
        if ($id) {
            $stmt = $pdo->prepare("DELETE FROM journal WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            http_response_code(204);
        } else {
            http_response_code(400);
            echo json_encode(array("message" => "ID d'utilisateur manquant"));
        }
    }
?>