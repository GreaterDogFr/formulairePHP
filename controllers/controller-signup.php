<?php 
// controlle du doc : Bouton enregistrer, valider inputs, etc
include '../views/view-signup.php';
$errors[] = '';
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

var_dump($_POST);
var_dump($errors)
?>