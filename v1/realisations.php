<?php
@session_start ();
require("./config.php");
$pathImage = "/images/competences/";
require("./commun/haut-de-page.php");
?>
<div class="container">

    <div class="row mt-5">
        <div class="col">
            <h1 class="text-center">Réalisations</h1>
            <p class="text-center my-5">Quoi de mieux de voir de ses yeux les réalisations pour se donner une idée du travail...?</p>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-11 mx-auto">
            <div class="card border-white p-0">
                <div class="card-header h3 bg-dark text-white">Refaites vos jeux <span class="badge badge-secondary text-success bg-dark">100%</span></div>
                <div class="card-body col-12 d-flex flex-column flex-md-row">
                    <div class="col-12 col-md-4 text-center align-self-center divImgCompetences">
                        <img src="/images/projets/refaitesvosjeux.png" alt="logo refaites vos jeux">
                    </div>
                    <div class="col-12 col-md-8 p-5">
                        <span class="text-info">Ne jetez plus vos jeux incomplet, complétez- les!</span><br/>
                        L'idée d' Antoine est tout simplement géniale, créer un service de vente de pièces détachées afin de prolonger la vie des jeux de société et ainsi limiter la génération de déchets !  </span>
                        <p><a href="https://www.refaitesvosjeux.fr" target="_blank" class="cursor-alias btn btn-info mt-3">Voir le site</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-11 mx-auto">
            <div class="card border-white p-0">
                <div class="card-header h3 bg-dark text-white">Exemple d'une E-boutique <span class="badge badge-secondary text-warning bg-dark">80%</span></div>
                <div class="card-body col-12 d-flex flex-column flex-md-row">
                    <div class="col-12 col-md-4 text-center align-self-center divImgCompetences">
                        <img src="/images/projets/exempleBoulangerie.png" alt="logo refaites vos jeux">
                    </div>
                    <div class="col-12 col-md-8 p-5">
                        <span class="text-info">Venez jetez un oeil ou les deux ! <i class="fas text-warning fa-smile-wink"></i></span><br/>
                        Pour maintenir mes connaissances, j'ai  construis une boutique en ligne sur le thème de la boulangerie... Avec tout un espace administrateur qui permet de gérer la E-boutique en live !</span>
                        <p><a href="https://exemple-eboutique.je-developpe.fr/" target="_blank" class="cursor-alias btn btn-info mt-3">Voir le site</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-4">
        <div class="col text-center">Il y a de la place pour d'autres ici... <i class="fas fa-smile-wink fa-2x text-info"></i></div>
    </div>
</div>
<?php
require("./commun/bas-de-page.php");
?>

