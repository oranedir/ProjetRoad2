<?php
/**
 * Created by PhpStorm.
 * User: Orane
 * Date: 16/05/2018
 * Time: 16:46
 */
require 'header.php';
?>
<div class="col-11 content">
<?php
if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "kangourou") //
{
    // On affiche les codes
    ?>
    <h1>Voici les codes d'accès :</h1>
    <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>

    <p>
        Cette page est réservée au personnel de la NASA. N'oubliez pas de la visiter régulièrement car les codes d'accès sont changés toutes les semaines.<br />
        La NASA vous remercie de votre visite.
    </p>
    <?php
}
else // Sinon, on affiche un message d'erreur
{
    echo '<p>Mot de passe incorrect</p>';
}
?>


<h1>Bienvenue !</h1>

</div>

<?php
require 'footer.php'
?>
