<?php
    require_once('config.php');
    if (isset($_POST['login']) && isset($_POST['mdp'])) {   
        $tryLogin = $_POST['login'];
        $sql = "SELECT * FROM utilisateur WHERE identifiant=:identifiant AND mdp=:mdp";
        $result = $pdo->prepare($sql);
        $result->bindParam(":identifiant", $_POST['login']);
        $result->bindParam(":mdp", $_POST['mdp']);
        $result->execute();
        if ($result->rowCount() > 0) {
            $row = $result->fetch(PDO::FETCH_ASSOC);
            $userID = $row['id'];
            $userNOM = $row['nom'];
            $userPRENOM = $row['prenom'];
            $userOBJECTIF = $row['objectif'];
            $userSPORT = $row['sport'];
            $userIMAGE = $row['photo'];
            $userSexe = $row['sexe'];
            $userAge = $row['age'];
            $sessionLifetime = 24 * 60 * 60; 
            session_set_cookie_params($sessionLifetime);
            session_start(); 
            $_SESSION['login'] = $tryLogin;
            $_SESSION['user_id'] = $userID;
            $_SESSION['nom'] = $userNOM;
            $_SESSION['prenom'] = $userPRENOM;
            $_SESSION['objectif'] = $userOBJECTIF;
            $_SESSION['sport'] = $userSPORT;
            $_SESSION['photo'] = $userIMAGE;
            $_SESSION['sexe'] = $userSexe;
            $_SESSION['age'] = $userAge;
            header('Location: ../frontend/index.php?page=profil');
        }
    } else {
        $errorText = "Merci d'utiliser le formulaire de login";
    }

    
?>