<div class="create_centered">
    <div class="textboite">
        <?php echo '<p><B>Type : </B>' . $_POST['type'] . '</p>'; ?>
        <?php echo '<p><B>Nom : </B>' . $_POST['nom'] . '</p>'; ?>
        <?php echo '<p><B>Glucides : </B>' . $_POST['glucide'] . '</p>'; ?>
        <?php echo '<p><B>Proteines : </B>' . $_POST['proteine'] . '</p>'; ?>
        <?php echo '<p><B>Sel : </B>' . $_POST['sel'] . '</p>'; ?>
        <?php echo '<p><B>Sucre : </B>' . $_POST['sucre'] . '</p>'; ?>
        <?php echo '<p><B>Lipides : </B>' . $_POST['lipide'] . '</p>'; ?>
        <form id="modifierForm" action="../backend/manger_aliment.php" method="POST">
            <label for="quantite">Quantite :</label>
            <input type="number" id="quantite" name="quantite">
            <input type="hidden" id="id_aliment" name="id_aliment" value="<?php echo $_POST['id'] ?>">
            <input type="hidden" id="id_utilisateur" name="id_utilisateur" value="<?php echo $_SESSION['user_id'] ?>">
            <button type="submit">Manger l'élément</button>
        </form>
    </div>
    <div class="image">
        <img loading="lazy" src="images/fruits.png" alt="Image de fruits">
    </div>
</div>



<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/info_aliments.js"></script>
</body>
<link rel="stylesheet" type="text/css" href="css/create.css">
</html>