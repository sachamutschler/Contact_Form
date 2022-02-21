<?php
/*
$errors = [];

if(!array_key_exists('objet', $_POST) || $_POST['objet'] == ''){
    $errors['objet'] ="Vous n'avez pas renseigné l'objet du mail";
}
if(!array_key_exists('description', $_POST) || $_POST['description'] == ''){
    $errors['description'] ="Vous n'avez pas renseigné la description";
}
if(!array_key_exists('email', $_POST) || $_POST['email'] == ''){
    $errors['email'] ="Vous n'avez pas renseigné l'email";
}

if(!empty($errors)){
    header('location: contact.php');
    session_start();
    $_SESSION['errors'] = $errors;
}
else{
    $objet = $_POST['objet'];
    $message = $_POST['description'];
    $mail = $_POST['email'];
    $headers = 'FROM: contact@horus-web.fr';
    mail('contact@horus-web.fr', $objet,$message,$headers);
}
*/
if(isset($_POST['button'])) {
    $objet = $_POST['objet'];
    $message = $_POST['description'];
    $mail = $_POST['email'];
    $headers = 'FROM: '. $mail;
    mail('contact@horus-web.fr', $objet, $message, $headers);
    echo('Le mail a été envoyé avec succès.');
}
elseif(isset($_POST['button'])){
    echo('Une erreur est survenue');
}