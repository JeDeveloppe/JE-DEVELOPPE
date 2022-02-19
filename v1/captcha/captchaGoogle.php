<!-- VOIR README -->
<?php
require("../config.php");
//liste les pages
if(preg_match('#contact#',$_SERVER['REQUEST_URI'])){
    $pageStatGoogleCapcha = "contact";
}else if(preg_match('#jeu/#',$_SERVER['REQUEST_URI'])){
    $pageStatGoogleCapcha = "demandeJeu";  
}else if(preg_match('#demande-devis#',$_SERVER['REQUEST_URI'])){
    $pageStatGoogleCapcha = "demandeDevis";  
}
?>
<script src="https://www.google.com/recaptcha/api.js?render=<?php echo $GLOBAL['cleSiteGoogleCaptcha']; ?>"></script>
<script>
let siteKeyGoogle = <?php echo json_encode($GLOBAL['cleSiteGoogleCaptcha']); ?>;
let pageDuSite = <?php echo json_encode($pageStatGoogleCapcha); ?>;
    grecaptcha.ready(function() {
        grecaptcha.execute(siteKeyGoogle, {action: pageDuSite}).then(function(token) {
            document.getElementById('recaptchaResponse').value = token
        });
    });
</script>