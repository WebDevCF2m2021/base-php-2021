<?php
// création ou continuation d'une session
session_start();

// si on est connecté (et que la connexion est toujours valide)
if (isset($_SESSION['myId']) && $_SESSION['myId'] == session_id()) {
    $connect = true;
} else {
    $connect = false;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>

<body>
<?php
    include "menu.php";
    ?>
    <h1>Accueil <?php if ($connect) : ?> | Bienvenue <?= $_SESSION['login'] ?> |
            <?php
                    switch ($_SESSION['droit']):
                        case 0:
                            echo " a1";
                            break;
                        case 1:
                            echo " a2";
                            break;
                        case 2:
                            echo " a3";
                            break;
                        default:
                            echo " publique";


                    endswitch;
            ?>
        <?php endif ?></h1>
   
        <h2>Permissions</h2>
    <h3>Accès a1</h3>
    <p>login et mot de passe : "a1", "a1"</p>
    <p>Peut naviguer sur ces pages :</p>
    <ul>
        <li>Accueil</li>
        <li>1.php</li>
        <li>2.php</li>
        <li>3.php</li>
        <li>disconnect.php</li>
    </ul>
    <h3>Accès a2</h3>
    <p>login et mot de passe : "a2", "a2"</p>
    <p>Peut naviguer sur ces pages :</p>
    <ul>
        <li>Accueil</li>
        <li>4.php</li>
        <li>disconnect.php</li>
    </ul>
    <h3>Accès a3</h3>
    <p>login et mot de passe : "a3", "a3"</p>
    <p>Peut naviguer sur ces pages :</p>
    <ul>
        <li>Accueil</li>
        <li>2.php</li>
        <li>3.php</li>
        <li>disconnect.php</li>
    </ul>
    <h3>Accès publique</h3>
    <p>Non connectés</p>
    <p>Peut naviguer sur ces pages :</p>
    <ul>
        <li>Accueil</li>
        <li>connect.php</li>
    </ul>
</body>

</html>