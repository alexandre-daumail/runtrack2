<html>

<body>
    <main>
        <form name="maison" method="post" action="#">
            <label for="largeur">Largeur :</label><br>
            <input type="text" id= "largeur" name="largeur" pattern="[0-9]{1,2}"/><br>

            <label for="hauteur">Hauteur :</label><br>
            <input type="text" id= "hauteur" name="hauteur" pattern="[0-9]{1,2}"/><br>

            <input type="submit" name="valider" value="Construire" /><br>
        </form>
    </main>
    <aside>
        <?php
        if (isset($_POST['valider'])){
            if($_POST['largeur'] == '10' && $_POST['hauteur'] == '5'){ 
                echo'<img src="petiteMaison.png" alt="petite maison">';
            }
            elseif($_POST['largeur'] == '20' && $_POST['hauteur'] == '10'){
                echo '<img src="grandeMaison.png" alt="grande maison">';
            }
            else {
                echo'les dimensions ne sont pas exploitables, désolé';
            }
        }
        
        ?>
    </aside>

</body>

</html>