<?php
@session_start ();
require("./config.php");
$pathImage = "/images/competences/";
require("./commun/haut-de-page.php");
require_once("./commun/message-flash.php");
?>
<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
<div class="container mt-2">
    <div class="row mb-2">
        <div class="col d-none d-sm-block clip-path">
            <img class="mw-100" src="/images/design/header-horizontal.png" alt="Max-width 100%">
        </div>
        <div class="col d-block d-sm-none">
            <img class="mw-100" src="/images/design/header-carre.png" alt="Max-width 100%">
        </div>
    </div>

    <div class="row my-4">
        <div class="col-11 mx-auto">
        <h4>A propos...</h4>
            <p>
            Le code est avant tout pour moi une passion.<br/>
            J'avais déjà fais 2- 3 projets web il y a 10 ans...<br/>
            J'ai profité du 1er confinement pour passer une formation de développeur web avec à la clé un diplôme obtenu en Août 2020 !<br/>
            Autodidacte à 100%, n' hésitez pas à prendre contact avec moi si vous avez un projet.
            </p>
        </div>
        <div class="col-11 mx-auto mt-5 d-flex justify-content-center">
            <a href="/realisations/" class="btnRealisation">👁️‍🗨️ Voir mes réalisations...</a>
        </div>
    </div>
</div>

<?php
require("./commun/bas-de-page.php");
?>

