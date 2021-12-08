<ul>
    <li><a href="./">Accueil</a></li>
    <li><a href="1.php">1PHP</a></li>
    <li><a href="2.php">2PHP</a></li>
    <li><a href="3.php">3PHP</a></li>
    <li><a href="4.php">4PHP</a></li>
    <?php
    if ($connect) :
    ?>
        <li><a href="deconnexion.php">Déconnexion</a></li>
    <?php
    else :
    ?>
        <li><a href="connexion.php">Connexion</a></li>
    <?php
    endif;
    ?>

</ul>