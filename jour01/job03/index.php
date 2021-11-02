<html>
    <?
        $type = array ("Booléen","Entier","Chaîne de caractères", "Nombre à virgule flottante");
        $nom = array ("bool", "int","string","float");
        $valeur = array("true or false", "142", "azerty", "1,42");
    ?>
    <table border =1>
        <thead>
            <tr>
                <td>Type</td>
                <td>Nom</td>
                <td>Valeur</td>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><? echo $type[0]?></td>
                <td><? echo $nom[0]?></td>
                <td><? echo $valeur[0]?></td>
            </tr>
            <tr>
                <td><? echo $type[1]?></td>
                <td><? echo $nom[1]?></td>
                <td><? echo $valeur[1]?></td>
            </tr>
            <tr>
                <td><? echo $type[2]?></td>
                <td><? echo $nom[2]?></td>
                <td><? echo $valeur[2]?></td>
            </tr>
            <tr>
                <td><? echo $type[3]?></td>
                <td><? echo $nom[3]?></td>
                <td><? echo $valeur[3]?></td>
            </tr>
        </tbody>
    </table>
</html>