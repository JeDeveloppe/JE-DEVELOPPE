<?php
@session_start ();
require("./config.php");
$pathImage = "/images/competences/";
require("./commun/haut-de-page.php");
?>

<h1 class="col-12 text-center mt-5">Languages.</h1>
<div class="container">
    <div class="row mt-5">
        <div class="col-11 col-md-9 col-lg-7 mx-auto">
            <p class="lead">
            Construire un site internet c'est utilisé et jonglé entre plusieurs languages...
                <ul>
                    <li>Mise en page du texte et "du décor". (on parle alors de Frontend)</li>
                    <li>Echange d'informations avec une base de données. (on parle alors de Backend)</li>
                    <li>Mise en place de la base de données.</li>
                    <li>Utilisation de Framework. (solutions toutes faites ou presque)</li>
                    <li>Versionner le site pour pouvoir revenir en arrière si besoin.</li>
                </ul>
            Un site internet ce n'est pas seulement ce que vous pouvez voir à l'écran...<br />
            Il y a plein de petites choses derrière qui s'activent avant, pendant et après l'affichage...
            </p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12 text-center h2">FRONTEND</div>
                <?php
                include_once("./bdd/connexion-bdd.php");
                $reponseFrontend = $bdd-> prepare('SELECT * FROM competencesDevWeb WHERE categorie = ? ORDER BY ? DESC'); //juste les compétences frontend
                $reponseFrontend-> execute(array("frontend","xp"));
                // On affiche chaque entrée une à une
                while ($donneesFrontend = $reponseFrontend->fetch()){
                    if($donneesFrontend['xp'] >= 70){
                        $barre = "success";
                    }elseif($donneesFrontend['xp'] < 70 AND $donneesFrontend['xp'] >= 50){
                        $barre = "warning";
                    }else{
                        $barre = "danger";
                    }
                    echo '<div class="col-8 mt-4 col-sm-7 col-md-5 col-lg-4 col-xl-3 mx-auto">
                            <div class="card shadow h-100">
                                <div class="divImgCompetences mt-2">
                                    <img class="border-0" src="'.$pathImage.$donneesFrontend['urlImage'].'" alt="'.$donneesFrontend['altImage'].'">
                                </div>
                                <div class="card-body d-flex flex-column justify-contend-around">
                                    <h5 class="card-title">'.$donneesFrontend['titre'].'</h5>
                                    <p class="card-text">'.$donneesFrontend['content'].'.</p>
                                    <div class="progress">
                                        <div class="progress-bar bg-'.$barre.'" role="progressbar" style="width: '.$donneesFrontend['xp'].'%" aria-valuenow="'.$donneesFrontend['xp'].' aria-valuemin="0" aria-valuemax="100">'.$donneesFrontend['xp'].'%</div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
                ?>
            
    </div>

    <div class="row mt-5">
        <div class="col-12 text-center h2" >BACKEND</div>
        
                <?php
                    include_once("./bdd/connexion-bdd.php");
                    $reponseBackend = $bdd->query('SELECT * FROM competencesDevWeb WHERE categorie = "backend" ORDER BY "xp" ASC '); //juste les compétences frontend
                    // On affiche chaque entrée une à une
                    while ($donneesBackend = $reponseBackend->fetch()){
                        if($donneesBackend['xp'] >= 70){
                            $barre = "success";
                        }elseif($donneesBackend['xp'] < 70 AND $donneesBackend['xp'] >= 50){
                            $barre = "warning";
                        }else{
                            $barre = "danger";
                        }
                        echo '<div class="col-8 mt-4 col-sm-7 col-md-5 col-lg-4 col-xl-3 mx-auto">
                                    <div class="card shadow h-100">
                                        <div class="divImgCompetences mt-2">
                                            <img class="border-0" src="'.$pathImage.$donneesBackend['urlImage'].'" alt="'.$donneesBackend['altImage'].'">
                                        </div>
                                        <div class="card-body d-flex flex-column justify-contend-around">
                                            <h5 class="card-title">'.$donneesBackend['titre'].'</h5>
                                            <p class="card-text">'.$donneesBackend['content'].'.</p>
                                            <div class="progress">
                                                <div class="progress-bar bg-'.$barre.'" role="progressbar" style="width: '.$donneesBackend['xp'].'%" aria-valuenow="'.$donneesBackend['xp'].' aria-valuemin="0" aria-valuemax="100">'.$donneesBackend['xp'].'%</div>
                                            </div>
                                        </div>
                                </div>
                            </div>';
                    }
                ?>
           
    </div>

    <div class="row mt-5">
        <div class="col-12 text-center h2" >BASE DE DONNEES</div>
            
                <?php
                    include_once("./bdd/connexion-bdd.php");
                    $reponseBdd = $bdd->query('SELECT * FROM competencesDevWeb WHERE categorie = "bdd" ORDER BY "xp" ASC '); //juste les compétences frontend
                    // On affiche chaque entrée une à une
                    while ($donneesBdd = $reponseBdd->fetch()){
                        if($donneesBdd['xp'] >= 70){
                            $barre = "success";
                        }elseif($donneesBdd['xp'] < 70 AND $donneesBdd['xp'] >= 50){
                            $barre = "warning";
                        }else{
                            $barre = "danger";
                        }
                        echo '<div class="col-8 mt-4 col-sm-7 col-md-5 col-lg-4 col-xl-3 mx-auto">
                                <div class="card shadow h-100">
                                    <div class="divImgCompetences mt-2">
                                        <img class="border-0" src="'.$pathImage.$donneesBdd['urlImage'].'" alt="'.$donneesBdd['altImage'].'">
                                    </div>
                                    <div class="card-body d-flex flex-column justify-contend-around">
                                        <h5 class="card-title">'.$donneesBdd['titre'].'</h5>
                                        <p class="card-text">'.$donneesBdd['content'].'.</p>
                                        <div class="progress">
                                            <div class="progress-bar bg-'.$barre.'" role="progressbar" style="width: '.$donneesBdd['xp'].'%" aria-valuenow="'.$donneesBdd['xp'].' aria-valuemin="0" aria-valuemax="100">'.$donneesBdd['xp'].'%</div>
                                        </div>
                                    </div>
                                </div>
                    </div>';
                    }
                ?>
        
    </div>

    <div class="row mt-5">
        <div class="col-12 text-center h2" >CMS</div>
           
                <?php
                    include_once("./bdd/connexion-bdd.php");
                    $reponseCms = $bdd->query('SELECT * FROM competencesDevWeb WHERE categorie = "cms" ORDER BY "xp" ASC '); //juste les compétences frontend
                    // On affiche chaque entrée une à une
                    while ($donneesCms = $reponseCms->fetch()){
                        if($donneesCms['xp'] >= 70){
                            $barre = "success";
                        }elseif($donneesCms['xp'] < 70 AND $donneesCms['xp'] >= 50){
                            $barre = "warning";
                        }else{
                            $barre = "danger";
                        }
                        echo '<div class="col-8 mt-4 col-sm-7 col-md-5 col-lg-4 col-xl-3 mx-auto">
                            <div class="card shadow h-100">
                                <div class="divImgCompetences mt-2">
                                    <img class="border-0" src="'.$pathImage.$donneesCms['urlImage'].'" alt="'.$donneesCms['altImage'].'">
                                </div>
                                <div class="card-body d-flex flex-column justify-contend-around">
                                <h5 class="card-title">'.$donneesCms['titre'].'</h5>
                                <p class="card-text">'.$donneesCms['content'].'.</p>
                                <div class="progress">
                                    <div class="progress-bar bg-'.$barre.'" role="progressbar" style="width: '.$donneesCms['xp'].'%" aria-valuenow="'.$donneesCms['xp'].' aria-valuemin="0" aria-valuemax="100">'.$donneesCms['xp'].'%</div>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
                ?>
            
    </div>

    <div class="row mt-5">
        <div class="col-12 text-center h2" >FRAMEWORK</div>
            
                <?php
                    include_once("./bdd/connexion-bdd.php");
                    $reponseFramework = $bdd->query('SELECT * FROM competencesDevWeb WHERE categorie = "framework" ORDER BY "xp" ASC '); //juste les compétences frontend
                    // On affiche chaque entrée une à une
                    while ($donneesFramework = $reponseFramework->fetch()){
                        if($donneesFramework['xp'] >= 70){
                            $barre = "success";
                        }elseif($donneesFramework['xp'] < 70 AND $donneesFramework['xp'] >= 50){
                            $barre = "warning";
                        }else{
                            $barre = "danger";
                        }
                        echo '<div class="col-8 mt-4 col-sm-7 col-md-5 col-lg-4 col-xl-3 mx-auto">
                            <div class="card shadow h-100">
                                <div class="divImgCompetences mt-2">
                                    <img class="border-0" src="'.$pathImage.$donneesFramework['urlImage'].'" alt="'.$donneesFramework['altImage'].'">
                                </div>
                                <div class="card-body d-flex flex-column justify-contend-around">
                                <h5 class="card-title">'.$donneesFramework['titre'].'</h5>
                                <p class="card-text">'.$donneesFramework['content'].'.</p>
                                <div class="progress">
                                    <div class="progress-bar bg-'.$barre.'" role="progressbar" style="width: '.$donneesFramework['xp'].'%" aria-valuenow="'.$donneesFramework['xp'].' aria-valuemin="0" aria-valuemax="100">'.$donneesFramework['xp'].'%</div>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
                ?>
            
    </div>

    <div class="row mt-5">
        <div class="col-12 text-center h2" >VERSIONING</div>
            
                <?php
                    include_once("./bdd/connexion-bdd.php");
                    $reponseVersion = $bdd->query('SELECT * FROM competencesDevWeb WHERE categorie = "versioning" ORDER BY "xp" ASC '); //juste les compétences frontend
                    // On affiche chaque entrée une à une
                    while ($donneesVersion = $reponseVersion->fetch()){
                        if($donneesVersion['xp'] >= 70){
                            $barre = "success";
                        }elseif($donneesVersion['xp'] < 70 AND $donneesVersion['xp'] >= 50){
                            $barre = "warning";
                        }else{
                            $barre = "danger";
                        }
                        echo '<div class="col-8 mt-4 col-sm-7 col-md-5 col-lg-4 col-xl-3 mx-auto">
                                <div class="card shadow h-100">
                                    <div class="divImgCompetences mt-2">
                                        <img class="border-0" src="'.$pathImage.$donneesVersion['urlImage'].'" alt="'.$donneesVersion['altImage'].'">
                                    </div>
                                    <div class="card-body d-flex flex-column justify-contend-around">
                                        <h5 class="card-title">'.$donneesVersion['titre'].'</h5>
                                        <p class="card-text">'.$donneesVersion['content'].'.</p>
                                        <div class="progress">
                                            <div class="progress-bar bg-'.$barre.'" role="progressbar" style="width: '.$donneesVersion['xp'].'%" aria-valuenow="'.$donneesVersion['xp'].' aria-valuemin="0" aria-valuemax="100">'.$donneesVersion['xp'].'%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    }
                ?>
            
    </div>

</div>
<?php
require("./commun/bas-de-page.php");
?>

