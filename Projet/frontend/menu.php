<?php
    function renderMenuToHTML($currentPageId) {
        $mymenu = array(
            'profil' => array('Profil'),
            'aliments' => array('Aliments'),
            'journal' => array('Journal'),
            'login' => array('iMangerMieux'),
            'create' => array('iMangerMieux'),
            'modifier' => array('iMangerMieux'),
            'info_aliment' => array('iMangerMieux'),
            'modifier_aliment' => array('iMangerMieux'),
            'statistique'  => array('Statistiques'),
        );
        echo '
        <div class="header">
            <div class="">';
            foreach($mymenu as $pageId => $pageTitle) {
                if ($pageId === $currentPageId) {
                echo    '<h1>' .$pageTitle[0]. '</h1>';
                }
            }
        echo '</div>
            <a href="../backend/logout.php" class="logout">Se déconnecter</a>
        </div>';
        echo '<div class="menu">';
        foreach($mymenu as $pageId => $pageTitle) {
            if ($pageId === $currentPageId) {
                if ($pageTitle[0] === 'iMangerMieux') {
                } else {
                    echo    '<div>
                                <a id = "currentpage" href="index.php?page='. $pageId. '">'. $pageTitle[0]. '</a>'.
                            '</div>';
                            
                }
            }
            else {
                if ($pageTitle[0] === 'iMangerMieux') {

                } else {
                    echo    '<div>
                    <a href="index.php?page='. $pageId. '">'. $pageTitle[0]. '</a>'.
                '</div>';
                }
           
            }
        }
        echo '</div>';
    }
?>