<?php

session_start();

if(isset($_GET['disconnected'])){
    session_unset();
    session_destroy();
}

$username="Anonymous";
$is_connected=false;

if(isset($_SESSION['login'])){
   $username=$_SESSION['login'];
   $is_connected=true; 
}

if(isset($_POST['login'])){
    $username=$_POST['login'];
    $_SESSION['login']=$username;
    $is_connected=true;
}

require_once('template_header.php');
require_once('template_menu.php');

// on simule une base de données
$users = array(
    // login => password
    'riri' => 'fifi',
    'yoda' => 'maitrejedi' );
    $login = "anonymous";
$errorText = "";

$successfullyLogged = false;
if(isset($_POST['login']) && isset($_POST['password'])) {
    $tryLogin=$_POST['login'];
    $tryPwd=$_POST['password'];
    // si login existe et password correspond
    if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
        $successfullyLogged = true;
        $login = $tryLogin;
        session_start();
        $_SESSION['login']=$tryLogin;
    } else
        $errorText = "Erreur de login/password";
    } else
        $errorText = "Merci d'utiliser le formulaire de login";
    
    
    
    if(!$successfullyLogged) {
        echo $errorText;
    } else {
        echo "<h1>Bienvenu ".$login."</h1>";
        header("Location : index.php");
    }
?>

<form id="login_form" action="index.php" method="POST">
    <table>
        <tr>
            <th>Login :</th>
            <td><input type="text" name="login"></td>
        </tr>
        <tr>
            <th>Mot de passe :</th>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="Se connecter..." /></td>
        </tr>
    </table>
</form>

        <div class="flex">Accueil</div>
    <div class="cont">
        <div>
            Contenu
        </div>
        <?php
        require_once('template_menu.php');
        renderMenuToHTML('index');
        ?>

<?php
require_once('template_footer.php');
?>