<?php
require_once 'init_db.php';


switch($_SERVER['REQUEST_METHOD']){
    case 'GET' : // Endpoint pour obtenir la liste des aliments
        // Code pour récupérer les aliments depuis la base de données et les renvoyer en JSON
        $request=$pdo->query("SELECT * FROM aliment");
        $result=$request->fetchAll(PDO::FETCH_ASSOC);

        header("Content-type: application/json; charset=UTF-8");
        echo json_encode($result, JSON_UNESCAPED_UNICODE);
        exit();  

    case 'POST' : //Endpoint pour ajouter un nouvel aliment
        $parameters=json_decode(file_get_contents('http://input'));

        if (isset(parameters->nom)&&isset(parameters->id_type)&&isset(parameters->calories)&&isset(parameters->glucide)
        &&isset(parameters->lipide)&&isset(parameters->proteine)&&isset(parameters->sel)&&isset(parameters->sucre)){
            $nom=parameters->nom;
            $type=parameters->id_type;
            $calories=parameters->calories;
            $glucide=parameters->glucide;
            $lipide=parameters->lipide;
            $proteine=parameters->proteine;
            $sel=parameters->sel;
            $sucre=parameters->sucre;

            $request=$pdo->prepare("INSERT INTO `aliment` (`id_type`, `nom`, `calories`, `glucide`, `lipide`, `proteine`, `sel`, `sucre`) 
            VALUES ('$type', '$nom', '$calories', '$glucide', '$lipide', '$proteine', '$sel', '$sucre');");
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
        
    case 'PUT' : 

        $parameters = json_decode(file_get_contents('php://input'));
            $alimentId = $parameters->id_aliment; 
            if (isset($alimentId)) {
                $stmt = $pdo->prepare("UPDATE aliments SET id_type = :id_type, nom = :nom, calories = :calories, glucides = :glucides, lipides = :lipides, proteines = :proteines, sel = :sel, sucre = :sucre WHERE id_aliment = :id");
                $stmt->bindParam(':id_type', $_PUT['id_type']);
                $stmt->bindParam(':nom', $_PUT['nom']);
                $stmt->bindParam(':calories', $_PUT['calories']);
                $stmt->bindParam(':glucides', $_PUT['glucides']);
                $stmt->bindParam(':lipides', $_PUT['lipides']);
                $stmt->bindParam(':proteines', $_PUT['proteines']);
                $stmt->bindParam(':sel', $_PUT['sel']);
                $stmt->bindParam(':sucre', $_PUT['sucre']);
                $stmt->bindParam(':id', $alimentId);
                $stmt->execute();
                http_response_code(201);
            } else {
                http_response_code(400);
            }
        exit();


    case 'DELETE' : 
        $parameters = json_decode(file_get_contents('php://input'));

        $alimentId = $parameters->id_aliment; 

        if (isset($alimentId)) {
            $request = $pdo->prepare("DELETE FROM aliment WHERE id_aliment = $alimentId;");
            $request->execute();
            http_response_code(204);
        } else {
            header("Content-Type: application/json; charset=utf-8");
            http_response_code(400);
        }
        exit();


}
break;