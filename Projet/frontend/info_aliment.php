<div class="create_centered">
    <div class="textboite">
        <?php echo '<p><B>Type : </B>' . $_POST['type'] . '</p>'; ?>
        <?php echo '<p><B>Nom : </B>' . $_POST['nom'] . '</p>'; ?>
        <?php echo '<p><B>Glucides : </B>' . $_POST['glucide'] . '</p>'; ?>
        <?php echo '<p><B>Proteines : </B>' . $_POST['proteine'] . '</p>'; ?>
        <?php echo '<p><B>Sel : </B>' . $_POST['sel'] . '</p>'; ?>
        <?php echo '<p><B>Sucre : </B>' . $_POST['sucre'] . '</p>'; ?>
        <?php echo '<p><B>Lipides : </B>' . $_POST['lipide'] . '</p>'; ?>
        <div class="choix">
            <form id="mangerForm" action="index.php?page=manger_aliment" method="POST">
            <input type="hidden" id="id" name="id" value="<?php echo $_POST['id'] ?>">
                <input type="hidden" id="type" name="type" value="<?php echo $_POST['type'] ?>">
                <input type="hidden" id="nom" name="nom" value="<?php echo $_POST['nom'] ?>">
                <input type="hidden" id="glucide" name="glucide" value="<?php echo $_POST['glucide'] ?>">
                <input type="hidden" id="proteine" name="proteine" value="<?php echo $_POST['proteine'] ?>">
                <input type="hidden" id="sel" name="sel" value="<?php echo $_POST['sel'] ?>">
                <input type="hidden" id="sucre" name="sucre" value="<?php echo $_POST['sucre'] ?>">
                <input type="hidden" id="lipide" name="lipide" value="<?php echo $_POST['lipide'] ?>">
                <button type="submit">Manger l'élément</button>
            </form>
            <form id="modifierForm" action="index.php?page=modifier_aliment" method="POST">
                <input type="hidden" id="id" name="id" value="<?php echo $_POST['id'] ?>">
                <input type="hidden" id="type" name="type" value="<?php echo $_POST['type'] ?>">
                <input type="hidden" id="nom" name="nom" value="<?php echo $_POST['nom'] ?>">
                <input type="hidden" id="glucide" name="glucide" value="<?php echo $_POST['glucide'] ?>">
                <input type="hidden" id="proteine" name="proteine" value="<?php echo $_POST['proteine'] ?>">
                <input type="hidden" id="sel" name="sel" value="<?php echo $_POST['sel'] ?>">
                <input type="hidden" id="sucre" name="sucre" value="<?php echo $_POST['sucre'] ?>">
                <input type="hidden" id="lipide" name="lipide" value="<?php echo $_POST['lipide'] ?>">
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