<div class="create_centered">
    <div class="textboite">
        <form id="create_form" action="../backend/ajouter_aliment.php" method="POST">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom">
            <label for="type">Type :</label>
            <input type="text" id="type" name="type">
            <label for="glucide">Glucide :</label>
            <input type="number" id="glucide" name="glucide">
            <label for="proteine">Proteine :</label>
            <input type="number" id="proteine" name="proteine">
            <label for="lipide">Lipides :</label>
            <input type="number" id="lipide" name="lipide">
            <label for="sucre">Sucre :</label>
            <input type="number" id="scure" name="sucre">
            <label for="sel">Sel :</label>
            <input type="number" id="sel" name="sel">
            <button type="submit">Envoyer</button>
        </form>
    </div>
    <div class="image">
        <img loading="lazy" src="images/fruits.png" alt="Image de fruits">
    </div>
</div>
</body>
<link rel="stylesheet" type="text/css" href="css/create.css">
</html>