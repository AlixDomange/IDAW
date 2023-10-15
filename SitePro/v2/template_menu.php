<div>
<nav>

<?php
function renderMenuToHTML($currentPageId) {
    $mymenu = array(
        'index' => array( 'Accueil' ),
        'cv' => array( 'Cv' ),
        'projets' => array('Mes Projets'),
        'infos' => array('Infos techniques')
    );
    echo '<ul class= "menu-list">';
    foreach($mymenu as $pageId => $pageParameters) {
        echo '<li>';
        if ($pageId === $currentPageId) {
            echo '<a id="currentpage" href="'. $pageId .'.php" >' . $pageParameters[0] . '</a>';
        } else {
            echo '<a href="' . $pageId . '.php">' . $pageParameters[0] . '</a>';
        }
        echo '</li>';
    }
    echo '</ul>';
}
?>

</nav>
</div>