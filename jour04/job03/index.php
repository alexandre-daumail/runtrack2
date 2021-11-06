<!-- Développez un algorithme qui affiche le nombre d’arguments POST. 
Tips : Pour tester, créez un formulaire html de type POST avec différents 
input. -->

<html>

<head>
    <title>Job 03 (Jour 4) </title>
</head>

<body>
    <h1>Bienvenue sur mon site </h1>
    <h2>Veuillez s'il vous plaît vous inscrire:</h2>
    <form name="inscription" method="post" action="#">
        Entrez votre pseudo : <input type="text" name="pseudo" /> <br />
        Entrez votre mot de passe : <input type="text" name="mdp" /><br />
        <input type="submit" name="valider" value="OK" />
    </form>

    <?php

    $i = 0;

    foreach ($_POST as [$argument]) {
        if ($argument != ' ') {
            $i++;
        }
    }

    echo 'Il y a ' . $i . ' arguments POST.'


    ?>

</body>



</html>