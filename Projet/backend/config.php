<?php
// Configuration de la base de données
define('DB_HOST', 'localhost');
define('DB_NAME', 'databaseprojet');
define('DB_USER', 'root');
define('DB_PASSWORD', '');


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

$request = $pdo->prepare("SELECT * FROM databaseprojet");
$request->execute();
$users = $request->fetchAll(PDO::FETCH_ASSOC);

?>