<?php
require_once('config.php');

$connectionString = "mysql:host=". _MYSQL_HOST;

if(defined('_MYSQL_PORT'))
    $connectionString .= ";port=". _MYSQL_PORT;

$connectionString .= ";dbname=" . _MYSQL_DBNAME;
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );

$pdo = NULL;
try {
    $pdo = new PDO($connectionString,_MYSQL_USER,_MYSQL_PASSWORD,$options);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $erreur) {
    echo 'Erreur : '.$erreur->getMessage();
}

$request = $pdo->prepare("SELECT * FROM users");
// TODO: add your code here
// retrieve data from database using fetch(PDO::FETCH_OBJ) and
// display them in HTML array
/*** close the database connection ***/
$request->execute();
$users = $request->fetchAll(PDO::FETCH_ASSOC);

echo '<table>';
echo '<tr><th>ID</th><th>Nom</th><th>Email</th></tr>';
foreach ($users as $user) {
    echo '<tr>';
    echo '<td>' . $user['id'] . '</td>';
    echo '<td>' . $user['name'] . '</td>';
    echo '<td>' . $user['email'] . '</td>';
    echo '</tr>';
}
echo '</table>';

require_once('addform.php');
if(isset($_GET['name']) && isset($_GET['email'])) {
    $name=$_GET['name'];
    $email=$_GET['email'];}

try {
    $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    echo "Nouvel élément ajouté avec succès à la base de données !";
} catch (PDOException $e) {
    echo "Erreur lors de l'ajout de l'élément : " . $e->getMessage();
}


$pdo = null;
?>