<!-- Développez un algorithme qui affiche le nombre d’arguments GET. 
Tips : Pour tester, créez un formulaire html de type GET avec différents 
input. -->

<?php
// var_dump($_GET);

?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Job 01 (Jour 04)</title>
</head>

<body>
    <form action="#" method="GET">
        <label for="nom">Nom:</label><br>
        <input type="text" id="nom" name="nom"><br>
        <label for="prenom">Prénom:</label><br>
        <input type="text" id="prenom" name="prenom"><br>
        <label for="age">Âge:</label><br>
        <input type="text" id="age" name="age"><br>
        <label for="adresse">Adresse:</label><br>
        <input type="text" id="adresse" name="adresse"><br>
        <input type="submit" value="Envoyer">
    </form>
</body>

<?php

$i = 0;

foreach($_GET as [$argument]){
    if($argument != ' '){
        $i++;
    }
}

echo 'Il y a ' . $i . ' arguments GET.'


?>

</html>