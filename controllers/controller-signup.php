<?php
$errors = [];
$validation = false;
// on vérifie que toutes les variables remplissent les conditions.
// Si elles sont toutes remplies dégager le formulaire et mettre une boite indiquant nos variable
$paternSpecChar = '/[\'\/^£$%&*()}{@#~?><>,|=_+¬-]/';

if (isset($_POST['nom'])) {
    if (preg_match($paternSpecChar, $_POST['nom'])) {
        $errors['nom'] = 'Pas de charactère spéciaux';

    } else if (empty($_POST['nom'])) {
        $errors['nom'] = 'Entrez votre nom';
    }
}

if (isset($_POST['prenom'])) {
    if (preg_match($paternSpecChar, $_POST['prenom'])) {
        $errors['prenom'] = 'Pas de charactère spéciaux';
    } else if (empty($_POST['prenom'])) {
        $errors['prenom'] = 'Entrez votre prénom';
    }
}

if ((isset($_POST['date'])) && empty($_POST['date'])) {
    $errors['date'] = 'Entrez une date';
}

if (isset($_POST['mail'])) {
    if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $errors['mail'] = 'Adresse Mail non valide';
    } else if (empty($_POST['mail'])) {
        $errors['mail'] = 'Entre une adresse mail';
    }
}

if (isset($_POST['password'])) {
    if (empty($_POST['password'])) {
        $errors['password'] = 'Entrez votre Mot de passe';
    } else if (strlen($_POST['password']) < 8) {
        $errors['password'] = 'Plus de 8 charactères';
    }
}

if (isset($_POST['password']) && (isset($_POST['passwordCheck']))) {
    if (empty($_POST['passwordCheck'])) {
        $errors['passwordCheck'] = 'Confirmez votre mot de passe';
    } else if ($_POST['password'] != $_POST['passwordCheck']) {
        $errors['passwordCheck'] = 'Mot de passe erroné';
    }
}

//Pour confirmer, on vérifie qu'il n'y a pas d'erreur.
//Si notre array est vide, on affiche une boite qui résumé notre inscription

if ((!empty($_POST)) && (empty($errors))) {
    $validation = true;
    echo
        '
    <div class="formBox">
    <h2>Récapitulatif des infos</h2>
        <ul>
            <li><span class="validationBold">Nom :</span></li>
            <li><span class="validationBold">Prénom : </span></li>
            <li><span class="validationBold">Date de naissance : </span></li>
            <li><span class="validationBold">Courriel : </span></li>
            <p class="validationText">Un mail de confirmation vous a été envoyé, vous pouvez vous connecter</p>
            </ul>
        <button class="connexion">Connexion</button>
    </div>
    '
    ;
}

include '../views/view-signup.php';
