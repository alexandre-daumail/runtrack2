<!-- Récupérez le nombre total d’étudiants dans une colonne nommée “nb_etudiants”.  -->

<?php

$bdd = mysqli_connect("localhost", "root", "", "jour08"); //=> initialiser connexion
$req = mysqli_query($bdd, "SELECT COUNT('id') AS 'nb_etudiants' FROM etudiants"); //=> exécuter requete

$res = mysqli_fetch_all($req, MYSQLI_ASSOC); //=> stocker requête

?>

<!doctype html>
<html lang="fr">

<head>
    <title>Job 06 - Jour 09</title>
</head>

<body>
    <main>
        <table border = 1>
            <thead>
                <?php
                foreach ($res[0] as $key => $value) {
                    echo '<th>' . $key . '</th>';
                }
                ?>
            </thead>

            <tbody>
                    <?php
                    foreach ($res as $key => $value) {
                        echo'<tr>' . '</tr>';
                        foreach ($value as $key2 => $value2) {
                            echo '<td>' . $value2 . '</td>';
                        }
                    }
                    ?>
            </tbody>
        </table>
    </main>
</body>

</html>