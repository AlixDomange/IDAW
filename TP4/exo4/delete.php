<?php

require_once("config.php");

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = :user_id");
    $stmt->bindParam(':user_id', $id);
    $stmt->execute(); 
   header('Location: users.php');
    exit();
} 

?>