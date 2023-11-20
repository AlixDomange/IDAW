<?php
require_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $sexe = $_POST["sexe"];
    $sport = $_POST["sport"];
    $objectif = $_POST["objectif"];
    $login = $_POST["login"];
    $mdp = $_POST["mdp"];

    try {
 
        $sql = "INSERT INTO utilisateur (nom, prenom, email, age, sexe, sport, objectif, identifiant, mdp) 
                VALUES (:nom, :prenom, :email, :age, :sexe, :sport, :objectif, :login, :mdp)";

        $query = $pdo->prepare($sql);

        $query->bindParam(":nom", $nom);
        $query->bindParam(":prenom", $prenom);
        $query->bindParam(":email", $email);
        $query->bindParam(":age", $age);
        $query->bindParam(":sexe", $sexe);
        $query->bindParam(":sport", $sport);
        $query->bindParam(":objectif", $objectif);
        $query->bindParam(":login", $login);
        $query->bindParam(":mdp", $mdp);

        $query->execute();

        header('Location: ../frontend/index.php?page=login');
        exit();
    } catch (PDOException $e) {
        echo "Erreur PDO : " . $e->getMessage();
    } finally {
        $pdo = null;
    }
}
?>