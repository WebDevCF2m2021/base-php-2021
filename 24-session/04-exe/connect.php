<?php
session_start();
$logins = ["a1", "a2", "a3"];
$pwds = ["a1", "a2", "a3"];
$perm = [0, 1, 2];

if (isset($_POST["login"]) && isset($_POST["pwd"]) && $_POST["login"] && $_POST["pwd"]) {
    if (in_array($_POST["login"], $logins) && $pwds[array_search($_POST["login"], $logins) !== false ? array_search($_POST["login"], $logins) : die()] === $_POST["pwd"]) {
        $_SESSION["id"] = session_id();
        $_SESSION["login"] = $_POST["login"];
        $_SESSION["right"] = $perm[array_search($_POST["login"], $login)];
        header("Location: ./");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect</title>
</head>

<body>
    <?php
    include "./menu.php";
    ?>
    <h1>Connect</h1>
    <form method="POST" action="">
        <input type="text" name="login" placeholder="login" required /></br>
        <input type="password" name="pwd" placeholder="pwd" required /></br>
        <input type="submit" required /></br>
    </form>
</body>

</html>