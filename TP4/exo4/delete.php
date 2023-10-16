<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];

    $serveur = 'localhost';
    $utilisateur = 'root';
    $mot_de_passe = '';
    $base_de_donnees = 'dbtest';

    $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

    if ($connexion->connect_error) {
        die("La connexion à la base de données a échoué : " . $connexion->connect_error);
    }

    $requete = "DELETE FROM users WHERE id = $id";

    if ($connexion->query($requete) === TRUE) {
        echo "Utilisateur supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression de l'utilisateur : " . $connexion->error;
    }

    $connexion->close();
} 
header('users.php');
?>