<!-- Contact -->
<section class="resume-section" id="contact">
    <div class="resume-section-content container">
        <h2 class="mb-5">Contactez- moi</h2>
        <div class="col-11 col-sm-10 col-lg-7 mx-auto">
            <form name="sentMessage" id="contactForm" action="/contact/ctrlFormContact.php" method="POST">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Adresse email valide merci" required>
                    <label for="floatingInput">Adresse email:</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" name="objet" id="floatingSelect" aria-label="Floating label select example" required>
                        <option value="" selected>Ouvrir le menu...</option>
                        <option value="Proposition de travail">Me proposer un projet / un job</option>
                        <option value="Question concernant le site">Une questions sur le site</option>
                        <option value="Motif: autre">Autre</option>
                    </select>
                    <label for="floatingSelect">Vous voulez me contactez pour:</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea name="content" style="height: 100px" class="form-control" placeholder="Votre message" id="floatingTextarea" required></textarea>
                    <label for="floatingTextarea">Votre message:</label>
                    <small class="text-danger">Minimum 20 caractères</small>
                </div>
                <div class="row">
                    <div class="form-group">
                        <input type="hidden" id="recaptchaResponse" name="recaptcha-response">
                        <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
                    </div>
                </div>
            </form>
        <?php 
            //message de confirmation ou non de la prise de contact
            require_once('contact.message-flash.php');
        ?>
        </div>
    </div>
</section>
<?php require_once("./captcha/captchaGoogle.php"); ?>