<?php
session_start();  //initialisation de la session

echo '<h1> Liste des prénoms enregistrés:</h1>';

if (!isset($_SESSION['name'])) // S'il n'y a pas de session, attribuer '' à $_SESSION['prénom'] (pour éviter message d'erreur comme quoi la clé n'est pas définie)
{
   $_SESSION['name'] = '';
}

if (isset($_POST['name'])) { //on attribue ce qui est entré dans le formulaire à une valeur _Session name qui stocke alors cette valeur.
   $_SESSION['name'] .= "<li>" . $_POST['name'] . "</li><br>";
}

echo $_SESSION['name']; // on écrit la derniere valeur de $_SESSION name

if (isset($_POST['reset'])) { //boucle de reset de la session 
   session_destroy();
}
?>

<html lang="fr">

<head>
   <meta charset="utf-8">
   <title>Job 03 - Jour 07</title>
</head>

<body>

   <form action="#" method="POST"> <!-- 1er formulaire pour l'input de texte à enregistrer -->
      <input type="text" name="name" required>
      <input type=submit value="Enregistrer">
   </form>

   <form action="reset.php" method="post"> <!-- 2eme form pour reset les données enregistrées -->
      <button type="submit">Reset</button>
   </form>
</body>

</html>