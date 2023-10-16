<?php
// Vérifier si l'ID de l'utilisateur est présent dans l'URL
if(isset($_GET['id']) && !empty($_GET['id'])){
    // Récupérer l'ID de l'utilisateur depuis l'URL
    $id = $_GET['id'];

    // Connexion à la base de données
    $serveur = 'localhost';
    $utilisateur = 'root';
    $mot_de_passe = '';
    $base_de_donnees = 'dbtest';

    // Établir la connexion à la base de données
    $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

    // Vérifier la connexion
    if ($connexion->connect_error) {
        die("La connexion à la base de données a échoué : " . $connexion->connect_error);
    }

    // Vérifier si le formulaire a été soumis
    if(isset($_GET['name']) && isset($_GET['email'])) {
        $name=$_GET['name'];
        $email=$_GET['email'];

        // Requête de mise à jour de l'utilisateur
        $requete = "UPDATE utilisateurs SET name='$nouveauNom', email='$nouvelEmail' WHERE id=$id";

        // Exécuter la requête
        if ($connexion->query($requete) === TRUE) {
            echo "Utilisateur mis à jour avec succès.";
        } else {
            echo "Erreur lors de la mise à jour de l'utilisateur : " . $connexion->error;
        }
    }

    // Récupérer les informations de l'utilisateur à partir de la base de données
    $requeteUtilisateur = "SELECT id, name, email FROM users WHERE id = $id";
    $resultatUtilisateur = $connexion->query($requeteUtilisateur);
    $utilisateur = $resultatUtilisateur->fetch_assoc();

    // Fermer la connexion à la base de données
    $connexion->close();
} else {
    // Redirectionner vers la page d'affichage des utilisateurs si l'ID n'est pas présent dans l'URL
    header("Location: afficher_utilisateurs.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'utilisateur</title>
</head>
<body>
    <h2>Modifier l'utilisateur</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']."?id=".$id; ?>">
        <label for="nouveauNom">Nouveau Nom:</label>
        <input type="text" id="nouveauNom" name="nouveauNom" value="<?php echo $utilisateur['name']; ?>"><br>

        <label for="nouvelEmail">Nouvel Email:</label>
        <input type="email" id="nouvelEmail" name="nouvelEmail" value="<?php echo $utilisateur['email']; ?>"><br>

        <input type="submit" value="Enregistrer les modifications">
    </form>
</body>
</html>