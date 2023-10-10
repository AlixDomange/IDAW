<?php
    require_once("template_header.php");
    require_once("template_menu.php");
    $currentPageId = 'accueil';
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }
    $currentLang = 'en';
    if (isset($_GET['lang'])) {
        $currentLang = $_GET['lang'];
    }
?>

<header class="bandeau_haut">
    <h1 class="titre">Alix Domange</h1>
</header>

<?php
    renderMenuToHTML($currentPageId);
?>

<section class="corps">
    <?php
        $pageToInclude = $currentPageId . ".php";
        if(is_readable($pageToInclude))
            require_once($pageToInclude);
    ?>
</section>

<?php
    require_once("template_footer.php");
?>