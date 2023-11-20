<div class="create_centered">
    <div class="textboite">
        <form id="create_form" action="../backend/create.php" method="POST">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom">
            <label for="nom">Prenom :</label>
            <input type="text" id="prenom" name="prenom">
            <label for="nom">Email :</label>
            <input type="text" id="email" name="email">
            <label for="nom">Age :</label>
            <input type="number" id="age" name="age">
            <label for="nom">sexe :</label>
            <input type="text" id="sexe" name="sexe">
            <label for="nom">Niveau Sportif :</label>
            <input type="text" id="sport" name="sport">
            <label for="nom">Objectif :</label>
            <input type="number" id="objectif" name="objectif">
            <label for="nom">Login :</label>
            <input type="text" id="login" name="login">
            <label for="nom">Mot de passe :</label>
            <input type="text" id="mdp" name="mdp">
            <button type="submit">Envoyer</button>
        </form>
        <a href="index.php?page=login">Se connecter</a>
    </div>
    <div class="image">
        <img loading="lazy" src="images/fruits.png" alt="Image de fruits">
    </div>
</div>
</body>
<link rel="stylesheet" type="text/css" href="css/create.css">
</html>