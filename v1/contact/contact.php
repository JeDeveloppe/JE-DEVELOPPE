<?php
@session_start (); 
$titreDeLaPage = "Je Développe - Contactez-moi !";
$descriptionPage = "Une proposition de job ? Un avis sur mon site ? Autre chose à dire ? Le formulaire est là pour cela !";
include_once("../commun/haut-de-page.php");
require_once("../commun/message-flash.php");
?>
<div class="container">
    <div class="row mt-5">
        <h3 class="col-12 text-center">Contact</h3>
        <div class="card col-11 col-sm-9 col-md-5 col-lg-5 mx-auto mt-3 text-center shadow">
            <form method="post" action="/contact/verifFormContact.php">
                <div class="form-group mb-4 mt-3">
                    <label for="exampleFormControlInput1">Votre adresse mail:</label>
                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Votre adresse mail" required>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlSelect2">Vous voulez me contactez pour:</label><br />
                    <select class="custon-select" name="objet" required>
                        <option value="">...</option> 
                        <option value="Proposition de job">Me proposer un projet</option>
                        <option value="Question concernant le site">Une questions sur le site</option>
                        <option value="Motif: autre">Autre</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlTextarea1">Votre demande:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content" placeholder="Minimum 30 caractères..." minlength="30" required></textarea>
                </div>
                <input type="hidden" id="recaptchaResponse" name="recaptcha-response">
                <button type="submit" class="btn btn-info mb-2">Envoyer</button>
            </form>
        </div>
    </div>
</div>

<?php
require("../captcha/captchaGoogle.php");
include_once("../commun/bas-de-page.php");
?>
