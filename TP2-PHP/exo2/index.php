<?php
$heureCourante =  date("H:i:s");
?>

<!doctype html>
<html>
    <header>
        <meta charset="utf-8">
        <title> Heure </title>
    </header>
    <body>
        <h1>Il est actuellement <?php echo $heureCourante; ?></h1>
        <h2><?php function afficher( $texte, $saut = 1 ) {
                        echo $texte;
                        for( $i = 0 ; $i < $saut ; $i++)
                        echo "\n";
                        }
                        afficher("Hello", 0);
                        afficher(" World !");?></h2>
        <h3> <?php $tab = array(17,-3);
                echo "tab : "; print_r($tab);?></h3>
  
    </body>
</html>