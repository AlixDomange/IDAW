<div class="section">
    <div class="biboite">
        <div class="info">
            <div class="image">
                <?php               
                    echo '<img loading="lazy" src="images/'. $_SESSION['photo'].'" alt="Image de Profil">';   
                ?>
            </div>
            <div class="infos">
                <?php echo '<div> Nom : ' . $_SESSION['nom'] . '</div>'; ?>
                <?php echo '<div> Prenom : '. $_SESSION['prenom'] . '</div>'; ?>
                <?php echo '<div> Age : '. $_SESSION['age'] . '</div>'; ?>
                <?php echo '<div> Sexe : '. $_SESSION['sexe'] . '</div>'; ?>
                <?php echo '<div> Sport : '. $_SESSION['sport'] . '</div>'; ?>
                <?php echo '<div> Objectif : '. $_SESSION['objectif'] . '</div>'; ?>
            </div>
        </div>
        <a href="index.php?page=modifier">Modifier vos données</a>
    </div>
</div>

</body>
<link rel="stylesheet" type="text/css" href="css/welcome.css">

</html>