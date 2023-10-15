<!DOCTYPE html>

<?php

    $selectedStyle="style1";

    if(isset($_COOKIE['selected_style'])){
        $selectedStyle=$_COOKIE['selected_style'];
    }

    if(isset($_GET['css'])) {
        $selectedStyle = $_GET['css'];
        setcookie("selected_style", $selectedStyle, time()+3600);
    }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Page</title>
    <link rel="stylesheet" href=" <?php echo $selectedStyle ?>.css">

</head>

<body>
    Bienvenue
    <form id="style_form" action="index.php" method="GET">
    <select name="css">
        <option value="style1">style1</option>
        <option value="style2">style2</option>
    </select>
    <input type="submit" value="Appliquer" />
</form>
</body>
</html>