<div class="create_centered">
    <div class="textboite">
        <?php echo '<p><B>Nom : </B>' . $_POST['nom'] . '</p>'; ?>
        <?php echo '<p><B>Date : </B>' . $_POST['date'] . '</p>'; ?>
        <?php echo '<p><B>Quantité : </B>' . $_POST['quantite'] . '</p>'; ?>
        <div class="choix">
            <form id="modifierForm" action="index.php?page=modifier_journal" method="POST">
                <input type="hidden" id="id" name="id" value="<?php echo $_POST['id'] ?>">
                <input type="hidden" id="nom" name="nom" value="<?php echo $_POST['nom'] ?>">
                <input type="hidden" id="date" name="date" value="<?php echo $_POST['date'] ?>">
                <input type="hidden" id="quantite" name="quantite" value="<?php echo $_POST['quantite'] ?>">
                <button type="submit">Modifier l'élément</button>
            </form>
            <form id="supprimerForm">
                <input type="hidden" id="id" name="id" value="<?php echo $_POST['id'] ?>">
                <button type="submit">Supprimer l'élément</button>
            </form>
        </div>
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