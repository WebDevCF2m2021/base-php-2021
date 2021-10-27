<?php
// il doit y exister l'id ET il doit être numérique int positif ET ce n'est pas 0
if(isset($_GET['id']) &&
    ctype_digit($_GET['id'])&&
    !empty($_GET['id'])){

    // transtypage de string to int
    $iduser = (int) $_GET['id'];

    // requête préparée dans workbench
    $sql="SELECT u.idtheuser, u.theuserlogin,
    GROUP_CONCAT(a.idthearticle ORDER BY a.thearticledate DESC) AS idthearticle, 
    GROUP_CONCAT(a.thearticletitle ORDER BY a.thearticledate DESC SEPARATOR '|||') AS thearticletitle,
    GROUP_CONCAT(SUBSTR(a.thearticletext,1,150) ORDER BY a.thearticledate DESC SEPARATOR '|||') AS thearticletext, 
    GROUP_CONCAT(a.thearticledate ORDER BY a.thearticledate DESC SEPARATOR '|||') AS thearticledate
        FROM theuser u
            LEFT JOIN thearticle a
            ON u.idtheuser = a.theuser_idtheuser
        WHERE u.idtheuser = $iduser
    GROUP BY u.idtheuser
    ;";

    // exécution de la requête
    $request = mysqli_query($db,$sql) or die("Erreur lors de la requête avec jointures : ".mysqli_error($db));

    // si on a un résultat (ça a fonctionné 0 ou 1)
    if(mysqli_num_rows($request)){
        $result = mysqli_fetch_assoc($request);
    }else{
        // redirection
    header("Location: ./");
    die;
    }

// pas de variable id    
}else{
    // redirection
    header("Location: ./");
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First CRUD | User | <?= $result['theuserlogin']?></title>
</head>
<body>
    <?php
    // menu publique
    include "menu.php";
    ?>
    <pre>
        <?php print_r($result) ?>
    </pre>
    <h1>First CRUD | User | <?= $result['theuserlogin']?></h1>
    <?php
    // l'utilisateur n'a pas écrit d'article(s), le champs avec les id d'articles est vide
    if(empty($result['idthearticle'])):
    ?>
    <h3>Il n'y a pas encore d'article(s) écrit par <?= $result['theuserlogin']?></h3>
    <?php
    // il y a au moins un article
    else:
        // on part du principe qu'on peut en avoir plusieurs (une boucle d'une itération reste très rapide à effectuer)
        // on va utiliser la fonction explode qui permet de couper sune chaîne de caractères sui vant un séparateur
        $idArticle = explode(",", $result['idthearticle']) ;
        $titleArticle = explode("|||",$result['thearticletitle']);
        $textArticle = explode("|||",$result['thearticletext']);
        $dateArticle = explode("|||",$result['thearticledate']);

    ?>
    <pre>
        <?php print_r($idArticle) ?>
        <?php print_r($titleArticle) ?>
        <?php print_r($textArticle) ?>
        <?php print_r($dateArticle) ?>
    </pre>
    <?php
    endif;
    ?>
</body>
</html>