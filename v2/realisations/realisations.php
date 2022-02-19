<?php
$realisations = [
    [
        "Exemple d'une e-boutique",
        "Depuis Mai 2021",
        80,
        "/images/projets/exempleBoulangerie.png",
        "logo de la boutique",
        'Venez jetez un oeil ou les deux ! <i class="fas text-warning fa-smile-wink"></i>',
        "Pour maintenir mes connaissances, j'ai  construit une boutique en ligne sur le thème de la boulangerie... Avec tout un espace administrateur qui permet de gérer la E-boutique en live !",
        "https://exemple-eboutique.je-developpe.fr/",
        '<i class="m-2 fab fa-3x fa-html5 color-html5"></i>
        <i class="m-2 fab fa-3x fa-css3-alt color-css3"></i>
        <i class="m-2 fab fa-3x fa-js-square color-javascript"></i>
        <i class="m-2 fab fa-3x fa-bootstrap color-bootstrap"></i>
        <i class="m-2 fab fa-3x fa-php color-php"></i>
        <img src="https://img.icons8.com/fluency/48/000000/mysql-logo.png"/>'
    ],
    [
        "Refaites vos jeux",
        "Depuis Décembre 2020",
        100,
        "/images/projets/refaitesvosjeux.png",
        "logo refaites vos jeux",
        "Ne jetez plus vos jeux incomplet, complétez- les!",
        "L'idée d' Antoine est tout simplement géniale, créer un service de vente de pièces détachées afin de prolonger la vie des jeux de société et ainsi limiter la génération de déchets !",
        "https://www.refaitesvosjeux.fr",
        '<i class="m-2 fab fa-3x fa-html5 color-html5"></i>
        <i class="m-2 fab fa-3x fa-css3-alt color-css3"></i>
        <i class="m-2 fab fa-3x fa-js-square color-javascript"></i>
        <i class="m-2 fab fa-3x fa-bootstrap color-bootstrap"></i>
        <i class="m-2 fab fa-3x fa-php color-php"></i>
        <img src="https://img.icons8.com/fluency/48/000000/mysql-logo.png"/>'
    ]
];
?>
<!-- Realisations-->
<section class="resume-section" id="experience">
    <div class="resume-section-content">
        <h2 class="mb-5">Réalisations</h2>
        <p class="mb-5">Quoi de mieux que de voir de ses yeux les réalisations pour se donner une idée du travail...?</p>
        <?php 
            foreach($realisations as $realisation){
                echo '<div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">'.$realisation[0].'<span class="text-primary badge badge-secondary">Terminé à '.$realisation[2].' %</span></h3>
                    <div class="subheading mb-3">'.$realisation[5].'</div>
                    <p>'.$realisation[6].'</p>
                    <p class="col-12 d-flex justify-content-around mb-4">'.$realisation[8].'</p>
                    <p class="col-12 text-center"><a class="text-decoration-none" href="'.$realisation[7].'" target="_blank"><i class="fas fa-location-arrow"></i> Voir le site</a></p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">'.$realisation[1].'</span></div>
            </div>';
            }
        ?>
        <!-- JE DEVELOPPE VERSION 1 -->
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
                <h3 class="mb-0">Je Développe<span class="text-primary badge badge-secondary">Terminé à 100 %</span></h3>
                <div class="subheading mb-3">Site de présentation de mes connaissances et autres...</div>
                <p>La version actuelle est la version 2.</p>
                <p class="col-12 d-flex justify-content-around mb-4">
                    <i class="m-2 fab fa-3x fa-html5 color-html5"></i>
                    <i class="m-2 fab fa-3x fa-css3-alt color-css3"></i>
                    <i class="m-2 fab fa-3x fa-js-square color-javascript"></i>
                    <i class="m-2 fab fa-3x fa-bootstrap color-bootstrap"></i>
                    <i class="m-2 fab fa-3x fa-php color-php"></i>
                </p>
                <p class="col-12 text-center"><a class="text-decoration-none" href="https://jedeveloppe-v1.je-developpe.fr/" target="_blank"><i class="fas fa-location-arrow"></i> Voir la version 1</a></p>
            </div>
            <div class="flex-shrink-0"><span class="text-primary">Depuis Juillet 2020</span></div>
        </div>
    </div>
</section>
<hr class="m-0" />