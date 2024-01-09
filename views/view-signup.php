<?php
// Header
include '../views/templates/header.php';

?>
<!-- body -->
<form class="form" action="../controllers/controller-signup.php" method="post">
    <div class="formLines">
        <label for="">Nom :</label>
        <input name="nom" type="text" placeholder="Ex: Hervé"  value="<?= isset($_POST['nom']) ? $_POST['nom'] : ''; ?>">
        <!-- If (empty($var)) cherche si $var est vide. Retourne true si vide. 
        Isset() vérifie si la variable existe déjà 
        (ici, on crée la variable via $_post après avoir submit le post-->
        <p class="errorText">
            <?php 
            isset($errors['nom']) ? $errors['nom'] : "";
            ?>
        </p>
    </div>
    <div class="formLines">
        <label for="">Prénom :</label>
        <input name="prenom" type="text" placeholder="Ex: Benjamin" value= "<?= isset($_POST['prenom']) ? $_POST['prenom'] : ''; ?>">
        <p class="errorText">
            <?php
            // if (isset($_POST['prenom'])) {
            //     if (preg_match($paternSpecChar, $_POST['prenom'])) {
            //         echo 'Pas de charactère spéciaux';
            //     } else if (empty($_POST['prenom'])) {
            //         echo 'Entrez votre prénom';
            //     }
            // }
            ?>
        </p>
    </div>
    <div class="formLines">
        <label for="">Date de naissance :</label>
        <input name="date" type="date" value="<?= isset($_POST['date']) ? $_POST['date'] : ''; ?>">
        <p class="errorText">
            <?php
            // if ((isset($_POST['date'])) && empty($_POST['date'])) {
            //     echo 'Entrez une date';
            // }
            ?>
        </p>
    </div>
    <div class="formLines">
        <label for="">Courriel :</label>
        <input name="mail" type="email" placeholder="yourmail@gmail.com" value="<?= isset($_POST['mail']) ? $_POST['mail'] : ''; ?>">
        <p class="errorText">
            <?php
            // if (isset($_POST['mail'])){
            //     if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            //         echo 'Adresse Mail non valide';
            //     } else if (empty ($_POST['mail'])){
            //         echo 'Entre une adresse mail';
            //     }
            // }
            ?>
        </p>
    </div>
    <div class="formLines">
        <label for="">Mot de passe :</label>
        <input name="password" type="password" value=""<?= isset($_POST['password']) ? $_POST['password'] : ''; ?>"">
        <p class="errorText">
            <?php 
            // if (isset($_POST['password'])) {
            //     if (empty($_POST['password'])) {
            //         echo 'Entrez votre Mot de passe';
            //     } else if (strlen($_POST['password'])<8) {
            //         echo 'Plus de 8 charactères';
            //     }
            // }
        ?>
    </p>
    </div>
    <div class="formLines">
        <label for="">Confirmation du mot de passe :</label>
        <input name="passwordCheck" type="password">
        <p class="errorText">
            <?php
            // if (isset($_POST['password']) && (isset($_POST['passwordCheck']))) {
            //     if (empty($_POST['passwordCheck'])){
            //         echo 'Confirmez votre mot de passe';
            //     } else if ($_POST['password']!= $_POST['passwordCheck']){
            //         echo 'Mot de passe erroné';
            //     }
            // }
            ?>
        </p>
    </div>
    <!-- boutton cgu -->

    <button class="submitButton btn btn-light" type="submit">S'enregistrer </button>
</form>

<?php
// Footer
include '../views/templates/footer.php'
?>