<?php
    @session_start ();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Contruisons ensemble votre site internet, blog personnel ou d'entreprise, site e-commerce, amélioration du référencement, etc..." />
        <meta name="author" content="WETTA René pour Je Développe" />
        <title>Je Développe - Développeur web Full Stack - Freelance</title>
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="/assets/favicon/site.webmanifest">
        <link rel="mask-icon" href="/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="/css/font-mfizz/font-mfizz.css">
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Suivi google analytics -->
        <?php require_once("./google-analytics.php");?>
        <!-- Add fontawesome pictures-->
        <link rel="stylesheet" href="/fontawesome/css/all.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <?php $cssVersion = date("dmY",time());?>
        <link href="/css/styles.css?version=<?php echo $cssVersion?>" rel="stylesheet" />
        <!-- animation typewritterjs -->
        <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    </head>
    <body id="page-top">
        <!-- START Bootstrap-Cookie-Alert -->
        <div class="p-3 text-center cookiealert" role="alert">
            <b>Vous aimez les cookies?</b> &#x1F36A; Je les utilise pour faire quelques statistiques sur le site. <a class="text-warning" href="https://www.cnil.fr/fr/cookies-les-outils-pour-les-maitriser" target="_blank">En savoir plus</a>
            <button type="button" class="btn bg-primary text-white btn-sm acceptcookies">
                Ok
            </button>
        </div>
        <!-- END Bootstrap-Cookie-Alert -->
            <?php
                require_once('./navigation.php');
            ?>

        <!-- Page Content-->
        <div class="container-fluid p-0">
            <?php 
                require_once("./config.php");

                //message de confirmation ou non de la prise de contact
                require_once('message-flash.php');
              
                require_once('./about/about.php');
                
                require_once('./realisations/realisations.php');

                require_once('./api-rest/api-rest.php');

                require_once('./formations/formations.php');

                require_once('./skills/skills.php');

                require_once('./interets/interets.php');

                require_once('./diplomes/diplomes.php');

                require_once('./contact/contact.php');

                require_once('./footer/footer.php');
            ?>

        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/js/scripts.js"></script>
    </body>
</html>
