<?php
session_start();
include('header.php');
include ('head.php');
include ('post_contact.php');
?>


        <?php if(array_key_exists('errors', $_SESSION)):?>
            <div class="alert alert-danger">
                <?= implode('<br>', $_SESSION['errors']);?>
            </div>
        <?php unset($_SESSION['errors']); endif; ?>
<div class="w-100 conteneur-form">
<form action="" method="post" name="contact-form" class="contact-form w-50">
    <h2>Formulaire de contact : </h2>
    <div>
        <p class="objet-form">Objet :</p>
        <input class="form-control" type="text" placeholder="Default input" aria-label="default input example" name="objet">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" >Adresse email :</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descriptif de la demande :</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>

        <button type="submit" name="button" class="btn btn-primary">Envoyer</button>
    </div>
    
</form>
</div>





<?php 
include('footer.php')
?>