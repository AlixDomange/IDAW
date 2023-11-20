<div class="create_centered">
    <div class="textboite">
        <div id="formContainer">
            <form id="sqlForm">
                <label for="prenom">Prenom :</label>
                <input type="text" id="prenom" name="prenom" value="<?php echo isset($_SESSION['prenom']) ? $_SESSION['prenom'] : ''; ?>">
                <label for="age">Age :</label>
                <input type="number" id="age" name="age" value="<?php echo isset($_SESSION['age']) ? $_SESSION['age'] : ''; ?>">
                <label for="age">Sexe :</label>
                <input type="text" id="sexe" name="sexe" value="<?php echo isset($_SESSION['sexe']) ? $_SESSION['sexe'] : ''; ?>">
                <label for="age">Sport :</label>
                <input type="text" id="sport" name="sport" value="<?php echo isset($_SESSION['sport']) ? $_SESSION['sport'] : ''; ?>">
                <label for="age">Objectif :</label>
                <input type="number" id="objectif" name="objectif" value="<?php echo isset($_SESSION['objectif']) ? $_SESSION['objectif'] : ''; ?>">
                <button type="submit">Envoyer</button>
            </form>
        </div>
    </div>
    <div class="image">
        <img loading="lazy" src="images/fruits.png" alt="Image de fruits">
    </div>
</div>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/modifier.js"></script>
</body>
<link rel="stylesheet" type="text/css" href="css/create.css">
</html>