<?php
    require_once("template_header.php");
    require_once("template_menu.php");
    $currentPageId = 'accueil';
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }
    $lang = 'fr';
    if(isset($_GET['lang'])){
        $lang = $_GET['lang'];
    }
?>

<header class="bandeau_haut">
    <h1 class="title">Alix Domange</h1>
</header>

<?php
    renderMenuToHTML($currentPageId, $lang);
?>

<section class="corps">
    <?php
        $pageToInclude = $lang ."/".$currentPageId.".php";
        if(is_readable($pageToInclude)){
            require_once($pageToInclude);}
        else{
            require_once("error.php");}
    ?>
</section>

<div class='langage'>
<a href="index.php?page=<?php echo $currentPageId; ?>&lang=fr">Français</a>
<a href="index.php?page=<?php echo $currentPageId; ?>&lang=en">Anglais</a>

</div>

<?php
require_once("template_footer.php");
?>