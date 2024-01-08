<?php
// Header
include '../views/templates/header.php'
?>
<!-- body -->
<form action="../controllers/controller-signup.php" method="post">
    <div class="formLines">
        <label for="">Nom</label>
        <input name="nom" type="text" placeholder="Ex: Hervé">
        <p>text</p>
    </div>
    <div class="formLines">
        <label for="">Prénom</label>
        <input name="prenom" type="text" placeholder="Ex: Benjamin">
        <p></p>
    </div>
    <div class="formLines">
        <label for="">Date de naissance</label>
        <input name="date" type="date">
        <p></p>
    </div>
    <div class="formLines">
        <label for="">Courriel</label>
        <input name="mail" type="email" placeholder="yourmail@gmail.com">
        <p></p>
    </div>
    <div class="formLines">
        <label for="">Mot de passe</label>
        <input name="password" type="password">
        <p></p>
    </div>
    <div class="formLines">
        <label for="">Confirmation du mot de passe</label>
        <input name="passwordCheck" type="password">
        <p></p>
    </div>

    <button id="submit" type="submit">S'enregistrer</button>
</form>

<?php
// Footer
include '../views/templates/footer.php'
?>