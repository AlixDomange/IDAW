<?php
require_once('template_header.php');
?>
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