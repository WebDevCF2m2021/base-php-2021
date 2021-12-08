<?php
session_start();
// grâce au session_start(), on va garder l'identifiant et le contenu de la session créée sur la page précédente.

$_SESSION['monIdDeSession'] = session_id(); // identification de la session
$_SESSION['user'][] = date("Y-m-d H:i:s") . " - " . $_SERVER['REMOTE_ADDR'] . " - " . $_SERVER['REQUEST_']

var_dump($_SESSION);