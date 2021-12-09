<?php
// création ou continuation d'une session
session_start();

// si on est connecté (et que la connexion est toujours valide)
if (isset($_SESSION['myId']) && $_SESSION['myId'] == session_id()) {
    $connect = true;
    // si l'utilisateur n'a pas le droit admin ou modérateur (0 - 1), plus grand que 1
    //var_dump($_SESSION);
    if ($_SESSION['droit'] ==0 || $_SESSION['droit'] ==2) {
        header("Location: ./");
    }
} else {
    header("location: ./");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4PHP</title>
</head>

<body>
    <?php
    include "menu.php";
    ?>
    <h1>Page 4PHP</h1>
    <h2>Permissions a1 (0)</h2>
    <pre><?php print_r($_SESSION) ?></pre>
    <h3>a1</h3>
    <p>Peut naviguer sur ces pages :</p>
    <ul>
        <li>Accueil</li>
        <li>1.php</li>
        <li>2.php</li>
        <li>3.php</li>
        <li>disconnect.php</li>
    </ul>
    <h3>a2</h3>
    <p>Peut naviguer sur ces pages :</p>
    <ul>
        <li>Accueil</li>
        <li>4.php</li>
        <li>disconnect.php</li>
    </ul>
    <h3>a3</h3>
    <p>Peut naviguer sur ces pages :</p>
    <ul>
        <li>Accueil</li>
        <li>2.php</li>
        <li>3.php</li>
        <li>disconnect.php</li>
    </ul>
    <h3>Accès publique</h3>
    <p>Peut naviguer sur ces pages :</p>
    <ul>
        <li>Accueil</li>
        <li>connect.php</li>
    </ul>
</body>

</html>