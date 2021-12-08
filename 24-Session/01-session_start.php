<?php
// POur lancer une session, on utilise la fonction sessions_start(), qui va créer automatiquement un cookie nommé PHPSESSID lié à l'URL du domaine sur la machine de l'utilisateur et un fichier texte temporaire du côté serveur nommé sess_ID-de-session, qui fait le lien entre le navigateur du l'utilisateur et le serveur.
session_start();

echo "<h3>session_start() lance une session et crée 2 fichier: </h3><p> un cookie PHPSESSID sur la machine utilisateur qui contient un id généré aléatoirement</p><p>un fichier dans le dossier tmp de apache, qui fera le lien avec le cookie</p>";
echo "<h3>ID de la session dans le cookie local, on peut le récupérer avec le session_id()</h3>";
echo "<p>" . session_id() . "</p>";
echo "<p>On sait donc qu'on a un fichier texte du côté serveur qui se nommera sess_" . session_id() . "</p>";
echo "<h3>En cas de suppression du cookie, session_start() va regénérer un id de session </h3><p>Par contre si on supprime le fichier temporaire il va recréer la session avec l'id du cookie! Il sera vide.</P>";
echo "<h3>Ce cookie ne contient que l'identifiant de session</h3>";
// on va stocker des infos dans la session.
$_SESSION['monIdDeSession'] = session_id(); // identification de session
$_SESSION['user']['adressIp'][] = $_SERVER['REMOTE_ADDR']; //récupéation de l'adresse ip
$_SESSION['user']['heure'][] = date("Y-m-d H:i:s");

$_SESSION['user'][] = date("Y-m-d H:i:s") . " - " . $_SERVER
var_dump($_SESSION);

echo "<h3>Lien vers une autre page sur le même site</h3>";
echo "<a href='02-session.php'>page 2</a>";