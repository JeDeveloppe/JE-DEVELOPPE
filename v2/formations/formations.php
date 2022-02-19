<?php
$formations = [
    [
        "<i class='fab fa-youtube text-danger'></i> Youtube, <span class='spanCodePen'><i class='fab fa-codepen text-dark'></i></span> CodePen...",
        "Je l'ai écrit, je suis autodidacte...",
        "Depuis Juillet 2020",
        "Bootstrap, animations en css, interaction avec javascript... on cherche, on teste, on décortique le code pour pouvoir l'appliquer..."
    ],
    [
        '<i class="fas fa-graduation-cap color-bootstrap"></i> OpenClassRooms',
        "Développeur web Full Stack",
        "D' Avril à Juin 2020",
        "Formation orientée JS avec NodeJs et VueJS, mais je n'ai pas trop accroché... je préfére PHP !"
    ]
];
?>

<!-- Formation -->
<section class="resume-section" id="education">
    <div class="resume-section-content">
    <h2 class="mb-5">Formations</h2>
        <?php
            foreach($formations as $formation){
                echo '
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">'.$formation[0].'</h3>
                        <div class="subheading mb-3">'.$formation[1].'</div>
                        <div>'.$formation[3].'</div>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">'.$formation[2].'</span></div>
                </div>';
            }
        ?>
    </div>
</section>
<hr class="m-0" />