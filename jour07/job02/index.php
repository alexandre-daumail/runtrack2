<!-- Créez un cookie nommée “nbvisites”. A chaque fois que la page est visitée, 
ajoutez 1. Afficher le contenu du cookie.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur -->

<?php

if (!isset($_COOKIE['nbvisites'])) {
    $value = 0;
} 
/* Le premier if teste si on est déjà venu sur cette page. si ce n'est pas le cas (false), on set $value à 0. 
Dans ce cas, l'echo plus bas affichera 1, ce qui illustre le fait que c'est la prémière fois qu'on visie cette page.
 */
else { //grace à ce else, on attribue la valeur du cookie nbvisites à value (c'est déjà le cas de toute façon, mais ça permet d'avoir le else qui termine la boucle)
    $value = $_COOKIE['nbvisites']; 
}

$value++;
setcookie('nbvisites', $value); // nom, valeur, expiration du cookie

echo 'On a visité cette page un total de : ' . $value . ' fois.<br>';

?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Job 02 - Jour 04</title>
</head>

<body>
    <!-- Ici on a le bouton de reset du comptage, qui est lié à un fichier php qui créée un nouveau cookie du même nom que celui qu'on a dans index.php, ce qui permet de remettre les valeurs en condition initiale -->
    <form action="reset.php" method="post"> 
        <button type="submit">Reset</button>
    </form>
</body>

</html>