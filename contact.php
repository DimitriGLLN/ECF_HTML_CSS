<?php
$title = "Contact";
include('parts/header.php'); ?>

<section class="contact">
    <div class="container">
        <h2 class="contact-title">Nous contacter</h2>
        <form action="#" class="contact-form">
            <div class="form-group">
                <label class="contact-label" for="name">Votre nom</label>
                <input class="contact-nom" type="text" id="name" name="name" placeholder="Entrez votre nom" required>

            </div>
            <div class="form-group">
                <label class="contact-label" for="mail">Votre e-mail</label>
                <input class="contact-mail" type="email" id="mail" name="mail" placeholder="Entrez votre adresse e-mail" required>
            </div>
            <div class="form-group area">
                <label class="contact-label" for="message">Votre message</label>
                <textarea class="contact-area" name="msg" id="msg" placeholder="Tapez votre message" required></textarea>
            </div>
            <div class="form-btn">
                <button href="#" class="btn-contact">Envoyer<img class="btn-contact-img" src="img/Icon-feather-arrow-right-circle-3.svg" alt="flèche du bouton envoyer"></button>
            </div>


        </form>
    </div>
</section>
<?php include('parts/footer.php'); ?>