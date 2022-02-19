<?php
    require_once("./config.php");
    $pageStatGoogleCapcha = "contact";
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