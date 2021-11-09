<!-- Créez une variable de session nommée “nbvisites”. A chaque fois que la
page est visitée, ajoutez 1. Afficher le contenu de cette variable.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->

<?php
session_start(); //initialisation de la session

if(isset($_SESSION["nbvisites"]) == true){ // création de boucle de comptage. la premiere fois que la page est chargée,
    //le isset sera false donc on commencera par initialiser le comptage au niveau du "else" plus bas.
    $_SESSION["nbvisites"]++; // une fois que la page a été chargée une premiere fois, on incrémentera la variable 
}
else{
    $_SESSION["nbvisites"]=0; 
}
echo $_SESSION["nbvisites"];

?>
