<?php
require_once('template_header.php');
?>

        <div class="title">Infos techniques</div>
        <?php
            require_once('template_menu.php');
            renderMenuToHTML('infos');
        ?>
        <div class="contenu">
            Ce site est codé en HTML et CSS.
        </div>

<?php
require_once('template_footer.php');
?>