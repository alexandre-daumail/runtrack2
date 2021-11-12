<!-- En utilisant php et mysqli, connectez-vous à la base de données “jour08”. A 
l’aide d’une requête SQL, récupérez le nom et la capacite de chacune des 
salles. Affichez le résultat de cette requête dans un tableau html. La 
première ligne de votre tableau html doit contenir le nom des champs. Les 
suivantes doivent contenir les données présentes dans votre base de 
données. -->

<?php

$bdd = mysqli_connect("localhost", "root", "", "jour08"); //=> initialiser connexion
$req = mysqli_query($bdd, "SELECT `nom`, `capacite` FROM `salles` WHERE 1"); //=> exécuter requete

$res = mysqli_fetch_all($req, MYSQLI_ASSOC); //=> stocker requête

?>

<!doctype html>
<html lang="fr">

<head>
    <title>Job 02 - Jour 09</title>
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