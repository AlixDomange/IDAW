<?php
require_once('config.php');

echo '<h1>Modify user</h1>';

if(isset($_GET['id'])) {
    $currentId = $_GET['id'];
    echo "ID de l'utilisateur à modifier : " . $currentId . "<br>";}

// if(isset($_GET['name']) && isset($_GET['email'])) {
//     $name=$_GET['name'];
//     $email=$_GET['email'];}

try {
    $requete = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $requete->bindParam(':id', $currentId);
    $requete->execute();
    
    $resultat = $requete->fetch(PDO::FETCH_ASSOC);
    $name = $resultat['name'];
    $email = $resultat['email'];
} catch (PDOException $e) {
    echo "Erreur lors de la récupération des données de l'utilisateur : " . $e->getMessage();
}

require_once('modifyform.php');

// if(isset($_POST['name']) && isset($_POST['email'])) {
//     $name=$_POST['name'];
//     $email=$_POST['email'];}

try {
    $requete = $pdo->prepare("UPDATE users SET name = :name, email = :email WHERE id = :$currentId");
    $requete->bindParam(':name', $name);
    $requete->bindParam(':email', $email);
    $requete->bindParam(':id', $currentId);
    $requete->execute();
    echo "Elément modifié avec succès";
} catch (PDOException $e) {
    echo "Erreur lors de la modification : " . $e->getMessage();
}

$pdo = null;
?>