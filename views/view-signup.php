<?php
// Header
include '../views/templates/header.php';

?>
<!-- body -->
<!-- If (empty($var)) cherche si $var est vide. Retourne true si vide. 
    Isset() vérifie si la variable existe déjà 
    (ici, on crée la variable via $_post après avoir submit le post-->
<?php
if ($validation == false){
?>
    <header>
        <h1>Inscription </h1>
    </header>
    <form class="form" action="../controllers/controller-signup.php" method="post">
        <div class="formLines">
            <label for="">Nom :</label>
            <input name="nom" type="text" placeholder="Ex: Hervé"  value="<?= isset($_POST['nom']) ? $_POST['nom'] : ''; ?>">
            
            <p class="errorText">
                <?php 
                echo isset($errors['nom']) ? $errors['nom'] : "";
                ?>
            </p>
        </div>
        <div class="formLines">
            <label for="">Prénom :</label>
            <input name="prenom" type="text" placeholder="Ex: Benjamin" value= "<?= isset($_POST['prenom']) ? $_POST['prenom'] : ''; ?>">
            <p class="errorText">
                <?php
                echo isset($errors['prenom']) ? $errors['prenom'] : "";
                ?>
            </p>
        </div>
        <div class="formLines">
            <label for="">Date de naissance :</label>
            <input name="date" type="date" value="<?= isset($_POST['date']) ? $_POST['date'] : ''; ?>">
            <p class="errorText">
                <?php
                echo isset($errors['date']) ? $errors['date'] : "";
                ?>
            </p>
        </div>
        <div class="formLines">
            <label for="">Courriel :</label>
            <input name="mail" type="email" placeholder="yourmail@gmail.com" value="<?= isset($_POST['mail']) ? $_POST['mail'] : ''; ?>">
            <p class="errorText">
                <?php
                echo isset($errors['mail']) ? $errors['mail'] : "";
                ?>
            </p>
        </div>
        <div class="formLines">
            <label for="">Mot de passe :</label>
            <input name="password" type="password" value=""<?= isset($_POST['password']) ? $_POST['password'] : ''; ?>"">
            <p class="errorText">
            <?php 
                echo isset($errors['password']) ? $errors['password'] : "";
            ?>
        </p>
        </div>
        <div class="formLines">
            <label for="">Confirmation du mot de passe :</label>
            <input name="passwordCheck" type="password">
            <p class="errorText">
                <?php
                    echo isset($errors['passwordCheck']) ? $errors['passwordCheck'] : "";
                ?>
            </p>
        </div>
        <!-- boutton cgu -->

        <button class="submitButton btn btn-light" type="submit">S'enregistrer </button>
    </form>
<?php
}
?>
<?php
// Footer
include '../views/templates/footer.php'
?>