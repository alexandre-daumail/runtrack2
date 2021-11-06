<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Job 05 (Jour 4)</title>
</head>

<body>
    <main>
        <h1>Bienvenue sur mon site </h1>
        <h2>Veuillez s'il vous plaît vous inscrire:</h2>
        <form name="inscription" method="post" action="#">
            Entrez votre pseudo : <input type="text" name="username" /> <br />
            Entrez votre mot de passe : <input type="text" name="password" /><br />
            <input type="submit" name="valider" value="OK" />
        </form>
    </main>
    <aside>
        <?php
        if (isset($_POST['valider'])) {
            if ($_POST['username'] == 'John' || $_POST['username'] == 'john') {
                if ($_POST['password'] == 'Rambo' || $_POST['password'] == 'rambo') {
                    echo 'C\'est pas ma guerre';
                }
            } else {
                echo 'Votre pire cauchemar';
            }
        }
        ?>
    </aside>
</body>

</html>