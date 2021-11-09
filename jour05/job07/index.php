<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Job 07 Jour 5</title>
</head>

<body>

    <main>
        <h2>Encodage</h2>

        <form action="#" method="post">
            <label for="texte">Texte</label><br>
            <input type="text" id="texte" name="texte" ><br><br>
            <label for="fonction">Choisissez une transformation:</label><br>
            <select id="fonction" name="fonction">
                <option value="gras">Gras</option>
                <option value="cesar">César</option>
                <option value="plateforme">Plateforme</option>
            </select>
            <input type="submit" value="Valider">
        </form>

    </main>
    <aside>
        <?php

        $str = $_POST['texte'];
        $majuscules = array ('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','X','Y','Z');


        function transformation($str){
            function gras($str){
                for($x=0; isset($str[$x])==true; $x++){
                    foreach ($majuscules as $majuscule){
                        if($str[$x] = $majuscule){
                            echo 
                        }

                    }
                }
            }
        }















        echo '<h2>' . 'Votre texte transformé:' . '<h2><br>';
        ?>
    </aside>
</body>

</html>