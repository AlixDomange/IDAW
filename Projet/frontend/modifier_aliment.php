<div class="create_centered">
    <div class="textboite">
        <div id="formContainer">
            <form id="sqlForm">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" value="<?php echo isset($_POST['nom']) ? $_POST['nom'] : ''; ?>">
                <label for="type">Type :</label>
                <input type="text" id="type" name="type" value="<?php echo isset($_POST['type']) ? $_POST['type'] : ''; ?>">
                <label for="glucide">Glucide :</label>
                <input type="number" id="glucide" name="glucide" value="<?php echo isset($_POST['glucide']) ? $_POST['glucide'] : ''; ?>">
                <label for="proteine">Proteine :</label>
                <input type="number" id="proteine" name="proteine" value="<?php echo isset($_POST['proteine']) ? $_POST['proteine'] : ''; ?>">
                <label for="lipide">Lipides :</label>
                <input type="number" id="objeclipidetif" name="lipide" value="<?php echo isset($_POST['lipide']) ? $_POST['lipide'] : ''; ?>">
                <label for="sucre">Sucre :</label>
                <input type="number" id="sucre" name="sucre" value="<?php echo isset($_POST['sucre']) ? $_POST['sucre'] : ''; ?>">
                <label for="sel">Sel :</label>
                <input type="number" id="sel" name="sel" value="<?php echo isset($_POST['sel']) ? $_POST['sel'] : ''; ?>">
                <input type="hidden" id="id" name="id" value="<?php echo $_POST['id'] ?>">
                <button type="submit">Envoyer</button>
            </form>
        </div>
    </div>
    <div class="image">
        <img loading="lazy" src="images/fruits.png" alt="Image de fruits">
    </div>
</div>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/modifier_aliment.js"></script>
</body>
<link rel="stylesheet" type="text/css" href="css/create.css">
</html>