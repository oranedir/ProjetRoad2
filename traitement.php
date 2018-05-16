<?php
/**
 * Created by PhpStorm.
 * User: Orane
 * Date: 16/05/2018
 * Time: 12:12
 */
$erreur = " <p style='color:red; font-style: italic;font-size: small; text-align: center;'> nom d'utilisateur et mot de passe invalide </p>";
$nom = $_POST ["pseudo"];
if (($_POST["pseudo"] == "orane")&&($_POST ["mdp"] == "stage")) {
    require __DIR__ . "/accueil.php";
    /*header ('location: http://www.commentcamarche.net/');*/
}
else {
    require __DIR__ . "/index.php";
    echo $erreur;
}
?>