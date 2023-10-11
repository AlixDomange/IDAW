<nav class="menu">

<?php
function renderMenuToHTML($currentPageId, $currentLang) {
    $mymenu = array(
        'index' => array( 'Accueil' , 'Home' ),
        'cv' => array( 'Cv' , 'Resume'),
        'hobbies' => array('Hobbies' , 'Hobbies'),
        'infos-techniques' => array('Infos techniques' , 'Technical information'),
        'contact' => array('Me contacter' , 'Contact me')
    );
    echo '<ul>';
    foreach($mymenu as $pageId => $pageParameters) {
        echo '<li>';
        if ($pageId === $currentPageId) {
            if($currentLang ==='fr'){
                echo '<a classe="active" href="index.php?page= ' . $pageId . '" >' . $pageParameters[0] . '</a>';
            }
            else{
                echo '<a classe="active" href="index.php?page= ' . $pageId . '" >' . $pageParameters[1] . '</a>';
            }
        } else {
            if($currentLang==='fr'){
                echo '<a classe="notActive" href="index.php?page= ' . $pageId . '">' . $pageParameters[0] . '</a>';
            }
            else{
                echo '<a classe="notActive" href="index.php?page= ' . $pageId . '">' . $pageParameters[1] . '</a>';
            }
        }
        
            
        echo '</li>';
    }
    echo '</ul>';
}
?>

</nav>