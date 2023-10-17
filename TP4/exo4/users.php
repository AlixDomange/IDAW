<?php
require_once('config.php');

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
    echo "<td><a href='modify.php?id=" . $user["id"] . "'>Modify</a> | <a href='delete.php?id=" . $user["id"] . "'>Delete</a></td>";
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

<!-- <!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>TP4</title>
</head>
<body>
        <div class="title">Users</div>
        <div class="contenu">
            <?php generateTable($allUsers, $currentAction, $currentId) ?>
        </div>
</body>
</html>    -->