<!-- Créez un formulaire qui contient une liste déroulante nommé “style” et un 
bouton submit. La liste déroulante doit proposer au moins “style1”, “style2” 
et “style3. Créez 3 fichiers css nommés “style1.css”, “style2.css” et
“style3.css”. Chaque style doit avoir des effets sur le design du formulaire, 
la couleur de background, la police d’écriture...
Lorsque l’on valide le formulaire, le style sélectionné doit être inclu et donc 
changer le visue -->

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Job 06 Jour 6</title>
</head>
<body>

    <main>
        <h2>Formulaire</h2>

        <form action="#" method="post">
            <label for="style">Style</label>
            <select id="style" name="style">
                <option value="style1">Style 1</option>
                <option value="style2">Style 2</option>
                <option value="style3">Style 3</option>
            </select>
            <input type="submit" value="Valider">
        </form>

    </main>

</html>