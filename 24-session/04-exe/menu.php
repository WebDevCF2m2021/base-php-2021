<?php
?>

<ul>
    <li><a href="./">Accueil</a></li>
    <?php
    if (isset($_SESSION["id"])) {
        if ($_SESSION["right"] === 0 || $_SESSION["right"] === 2) {
            if ($_SESSION["right"] === 0) {
    ?>
                <li><a href="1.php">Page 1</a></li>
            <?php
            } else {
            ?>
                <li><a href="2.php">Page 2</a></li>
                <li><a href="3.php">Page 3</a></li>
            <?php
            }
        } elseif ($_SESSION["right"] === 1) {
            ?>
            <li><a href="4.php">Page 4</a></li>
        <?php
        }
        ?>
        <li><a href="disconnect.php">déconnexion</a></li>
    <?php
    } else {
    ?>
        <!-- affiché lorsqu'on est pas connecté, contient le formulaire de connexion -->
        <li><a href="connect.php">connexion</a></li>
        <!-- affiché lorsqu'on est connecté, contient la déconnexion réel de la session suivie d'une ridirection vers l'accueil -->
    <?php
    }
    ?>
</ul>