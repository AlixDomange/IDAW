<?php
require_once('config.php');

echo '<h2>Modify user</h2>';

if(isset($_GET['id'])) {
    $currentId = $_GET['id'];
    echo "ID de l'utilisateur à modifier : " . $currentId . "<br>";
    require_once('modifyform.php');
if (isset($_POST['name']) && isset($_POST['email'])){
    $name=$_POST['name'];
    $email=$_POST['email'];

    try {
        $requete = $pdo->exec("UPDATE `users` SET `name` ='$name', `email` = '$email' WHERE `id` = '$currentId';");
        echo "Elément modifié avec succès";
    } catch (PDOException $e) {
        echo "Erreur lors de la modification : " . $e->getMessage();
    }
}
}

$pdo = null;
?>