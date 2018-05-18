<?php
/**
 * Created by PhpStorm.
 * User: Orane
 * Date: 16/05/2018
 * Time: 12:12
 */
$erreur = " <p style='color:red; background-color: rgba(255, 255, 255, 0.9);font-style: italic;font-size:10px; text-align: center; position: absolute; top: 50px; right: 13px;  '> nom d'utilisateur ou mot de passe invalide </p>";
$nom = $_POST ["pseudo"];

if (($_POST["pseudo"] == "orane")&&($_POST ["mdp"] == "stage"))  {
    ?>
    <?php
    /**
     * Created by PhpStorm.
     * User: Orane
     * Date: 16/05/2018
     * Time: 16:46
     */
    require 'header.php'
    ?>
<div class="content">
    <h1>Bonjour!</h1>
    <form action="connected.php" method="post">
        <h3>Renseignez le montant total des frais pour chaque catégorie:</h3>
            <div class="form-group">
                <label for="essence" > Essence:  </label>
                <input type="number" name="essence" required autofocus placeholder="éssence"/>
            </div>
            <div class="form-group">
                <label for="nourriturecom" > Courses communes </label>
                <input type="number" name="nourriturecom" required placeholder="courses communes"/>
            </div>
            <div class="form-group">
                <label for="nourriturepers" > Courses personnelles </label>
                <input type="number" name="nourriturepers" required placeholder="courses personelles"/>
            </div>
            <div class="form-group">
                <label for="logement" > Logements </label>
                <input type="number" name="logement" required placeholder="logement"/>
            </div>
            <input type="submit" value="Connexion" class="btn"/>
        </form>
    </form>
</div>

    <?php
    /**
     * Created by PhpStorm.
     * User: Orane
     * Date: 16/05/2018
     * Time: 16:46
     */
    require 'footer.php'
    ?>
    <?php
}

else {
    require __DIR__ . "/index.php";
    echo $erreur;
}
?>


