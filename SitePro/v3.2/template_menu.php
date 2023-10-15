<div>
<nav>

<?php
function renderMenuToHTML($currentPageId,$lang) {
    $mymenu = array(
        'accueil' => array( 'Accueil' , 'Home' ),
        'cv' => array( 'Cv' , 'Resume' ),
        'projets' => array('Mes Projets' , 'My projects'),
        'infos' => array('Infos techniques' , 'Technical infos'),
        'contact' => array('Me contacter' , 'Contact me')
    );
    echo '<ul class= "menu-list">';
    foreach($mymenu as $pageId => $pageParameters) {
        echo '<li>';
        if ($pageId === $currentPageId) {
            if($lang ==='fr'){
                echo '<a id="currentpage" href="index.php?page= ' . $pageId . '" >' . $pageParameters[0] . '</a>';
            }
            else{
                echo '<a id="currentpage" href="index.php?page= ' . $pageId . '" >' . $pageParameters[1] . '</a>';
            }
        } else {
            if($lang==='fr'){
                echo '<a href="index.php?page= ' . $pageId . '">' . $pageParameters[0] . '</a>';
            }
            else{
                echo '<a href="index.php?page= ' . $pageId . '">' . $pageParameters[1] . '</a>';
            }
        }    
        echo '</li>';
        }
    echo '</ul>';
}
?>

</nav>
</div>