<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Job 06 (Jour 4)</title>
</head>

<body>
    <main>
        <h1>Bienvenue sur mon site </h1>
        <h2>Parité des nombres</h2>
        <p>Si vous souhaitez enfin connaitre la vérité quant à la parité du nombre entier relatif que vous avez en tête, veuillez l'entrer dans la case "Nombre":</p>
        <form name="inscription" method="post" action="#">
            Nombre : <input type="number" name="nb" value = "0"/>
            <input type="submit" name="valider" value="OK" /><br>
        </form>
    </main>
    <aside>
        <?php
        if (isset($_POST['valider'])) {
            if($_POST['nb'] % 2 ==0) {
                echo 'Le nombre que vous avez entré est PAIR.';
            }
            else{
                echo'Le nombre que vous avez entré est IMPAIR.';
            }
        }
        ?>
    </aside>
</body>

</html>