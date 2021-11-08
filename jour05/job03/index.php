<!-- Créez une fonction nommée “gethello”. Cette fonction doit retourner “Hello
LaPlateforme!”. Appelez cette fonction dans votre page en récupérant sa
valeur de retour et affichez la. -->

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Hello LaPlateforme!</title>
</head>


<body>
<?php
function gethello($x)
{
    if ($x == true){
        return 'Hello LaPlateforme';
    }
}
echo gethello(true) . '<br>'; 
echo gethello(false);
?>
</body>

</html>