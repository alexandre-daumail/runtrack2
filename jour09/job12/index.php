<!-- sélectionnez le prenom, le nom et la date de naissance 
des étudiants qui sont nés entre 1998 et 2018 -->

<?php

$bdd = mysqli_connect("localhost", "root", "", "jour08"); //=> initialiser connexion
$req = mysqli_query($bdd, "SELECT `prenom`,`nom`,`naissance` FROM etudiants WHERE `naissance` BETWEEN CAST('1998-01-01' AS DATE) AND CAST('2018-01-01' AS DATE)"); //=> exécuter requete

$res = mysqli_fetch_all($req, MYSQLI_ASSOC); //=> stocker requête

?>

<!doctype html>
<html lang="fr">

<head>
    <title>Job 12 - Jour 09</title>
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