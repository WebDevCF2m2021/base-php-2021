<?php
session_start();
if (!isset($_SESSION["id"]) || $_SESSION["id"] !== session_id() || $_SESSION["right"] != 1) {
    header("Location: ./disconnect.php");
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
    include "./menu.php";
    ?>
    <h1>4</h1>
    <pre>
        <?php
        print_r($_SESSION);
        ?>
    </pre>
</body>

</html>