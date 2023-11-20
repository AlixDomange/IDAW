<div class="create_centered">
    <div class="textboite">
        <div id="formContainer">
            <form id="sqlForm">
                <input type="hidden" id="id" name="id" value="<?php echo $_POST['id'] ?>">
                <?php echo '<p><B>Nom : </B>' . $_POST['nom'] . '</p>'; ?>
                <label for="date">Date :</label>
                <input type="date" id="date" name="date" value="<?php echo isset($_POST['date']) ? $_POST['date'] : ''; ?>">
                <label for="quantite">Quantite :</label>
                <input type="number" id="quantite" name="quantite" value="<?php echo isset($_POST['quantite']) ? $_POST['quantite'] : ''; ?>">
                <button type="submit">Envoyer</button>
            </form>
        </div>
    </div>
    <div class="image">
        <img loading="lazy" src="images/fruits.png" alt="Image de fruits">
    </div>
</div>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/modifier_journal.js"></script>
</body>
<link rel="stylesheet" type="text/css" href="css/create.css">
</html>