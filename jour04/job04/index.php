<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Job 04 (Jour 4)</title>
</head>

<body>
    <main>
        <h1>Bienvenue sur mon site </h1>
        <h2>Veuillez s'il vous plaît vous inscrire:</h2>
        <form name="inscription" method="post" action="#">
            Entrez votre pseudo : <input type="text" name="pseudo" /> <br />
            Entrez votre mot de passe : <input type="text" name="mdp" /><br />
            <input type="submit" name="valider" value="OK" />
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
                    <?php
                    foreach ($_POST as $key => $value) {
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