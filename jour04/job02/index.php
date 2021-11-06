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
        <table>
            <thead>
                <tr>
                    <th>Argument</th>
                    <th>Valeur</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Nom</td>
                    <td><?php echo $_GET['nom'] ?></td>
                </tr>
                <tr>
                    <td>Prénom</td>
                    <td><?php echo $_GET['prenom'] ?></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><?php echo $_GET['age'] ?></td>
                </tr>
                <tr>
                    <td>Adresse</td>
                    <td><?php echo $_GET['adresse'] ?></td>
                </tr>
            </tbody>
        </table>
    </aside>
</body>

</html>