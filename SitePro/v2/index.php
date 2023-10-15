<?php
require_once('template_header.php');
?>

        <div class="title">Accueil</div>
        <?php
            require_once('template_menu.php');
            renderMenuToHTML('index');
        ?>
        <div class="contenu">
            Bienvue sur mon site. <br>
            Je suis Alix Domange, étudiante en 2ème année à IMT Nord Europe.
        </div>

<?php
require_once('template_footer.php');
?>