<!-- Développez un algorithme qui affiche le nombre d’arguments GET. 
Tips : Pour tester, créez un formulaire html de type GET avec différents 
input. -->

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Job 02 (Jour 4)</title>
</head>

<body>
    <main>
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
    </main>
    <aside>
        <table border = 1>
            <thead>
                <tr>
                    <th>Argument</th>
                    <th>Valeur</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php
                        foreach($_GET as $key => $value){
                            echo '<tr><td>' . $key . '</td>';
                            echo '<td>' . $value . '</td></tr>';
                        }
                        ?>
                </tr>
            </tbody>
        </table>
    </aside>
</body>

</html>