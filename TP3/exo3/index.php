<?php
    if(isset($_GET['css'])) {
        $selectedStyle = $_GET['css'];
        setcookie("selected_style", $selectedStyle, time()+3600);
    }
?>

<?php if(isset($_COOKIE['selected_style']))
    echo $_COOKIE['selected_style'];
?>

<form id="style_form" action="index.php" method="GET">
    <select name="css">
        <option value="style1">style1</option>
        <option value="style2">style2</option>
    </select>
    <input type="submit" value="Appliquer" />
</form>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Page</title>
    <?php
    // Lire l'identifiant CSS du cookie, s'il existe. Sinon, utiliser un style par défaut.
    $selectedStyle = isset($_COOKIE['selected_style']) ? $_COOKIE['selected_style'] : 'style1';

    // Inclure la bonne feuille de style en fonction de l'identifiant CSS
    echo '<link rel="stylesheet" href="' . $selectedStyle . '.css">';
    ?>
</head>
<body>
    Bienvenue
</body>
</html>
