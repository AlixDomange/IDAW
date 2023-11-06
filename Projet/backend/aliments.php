<?php
require_once 'init_pdo.php';


switch($_SERVER['REQUEST_METHOD']){
    case 'GET' : // Endpoint pour obtenir la liste des aliments
        // Code pour récupérer les aliments depuis la base de données et les renvoyer en JSON
        $request=$pdo->query("SELECT * FROM `aliment`");
        $result=$request->fetchAll(PDO::FETCH_ASSOC);

        header("Content-type: application/json; charset=UTF-8");
        echo json_encode($result, JSON_UNESCAPED_UNICODE);
        exit();

    case 'POST' : //Endpoint pour ajouter un nouvel aliment
        $parameters=json_decode(file_get_contents('http://input'));

        if (isset(parameters->nom)&&isset(parameters->type)&&isset(parameters->calories)&&isset(parameters->glucide)
        &&isset(parameters->lipide)&&isset(parameters->proteine)&&isset(parameters->sel)&&isset(parameters->sucre)){
            $nom=parameters->nom;
            $type=parameters->type;
            $calories=parameters->calories;
            $glucide=parameters->glucide;
            $lipide=parameters->lipide;
            $proteine=parameters->proteine;
            $sel=parameters->sel;
            $sucre=parameters->sucre;

            $request=$pdo->prepare("INSERT INTO `aliment` (`id`, `nom`, `type`, `calories`, `glucide`, `lipide`, `proteine`, `sel`, `sucre`) 
            VALUES (NULL, '$nom', '$type', '$calories', '$glucide', '$lipide', '$proteine', '$sel', '$sucre');");
            $request->execute();

            $table=pdo->prepare("SELECT * FROM `aliment`;");
            $table->execute();
            $aliments=$table->fetchAll(PDO::FETCH_ASSOC);
            $created_aliment=end($aliments);

            header("Content-type: application/json; charset=UTF-8");
            http_response_code(201);
            echo json_encode($created_aliment, JSON_UNESCAPED_UNICODE);
        } else{
            header("Content-type: appplication/json; charset=UTF-8");
            http_response_code(400);
        }
        exit();
        
    case 'PUT' : //Endpoint pour mettre à jour un aliment
        
        exit();


    case 'DELETE' : //Endpoint pour supprimer un aliment
        $parameters = json_decode(file_get_contents('php://input'));

        $alimentId = $parameters->id; 

        if (isset($alimentId)) {
            $request = $pdo->prepare("DELETE FROM `aliment` WHERE `id` = $alimentId;");
            $request->execute();
        } else {
            header("Content-Type: application/json; charset=utf-8");
            http_response_code(400);
        }
        exit();
}
break;