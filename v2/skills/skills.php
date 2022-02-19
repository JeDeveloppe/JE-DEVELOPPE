<?php
$languages = [
    [
        '<i class="fab fa-html5 color-html5"></i>','success',85
    ],
    [
        '<i class="fab fa-css3-alt color-css3"></i>','success',85
    ],
    [
        '<i class="fab fa-js-square color-javascript"></i>','success',75
    ],
    [
        '<i class="fab fa-node-js text-success" ></i>','danger',35
    ],
    [
        '<i class="fab fa-sass text-pink"></i>','warning',55
    ],
    [
        '<i class="fab fa-bootstrap color-bootstrap"></i>','success',75
    ],
    [
        '<i class="fab fa-php color-php"></i>','success',85
    ],
    [
        '<i class="fab fa-symfony color-symfony"></i>','warning',50
    ],
    [
        '<i class="fab fa-vuejs text-success"></i>','danger',35
    ],
    [
        '<img src="https://img.icons8.com/fluency/48/000000/mysql-logo.png"/>','success',85
    ],
    [
        '<i class="fab fa-codepen text-dark"></i>','success',85
    ],
    [
        '<i class="fab fa-git-alt text-danger"></i>','success',80
    ],
    [
        '<img src="https://img.icons8.com/fluency/48/000000/visual-studio-code-2019.png"/>','success',80
    ],
    [
        '<img src="https://img.icons8.com/color/48/000000/filezilla.png"/>','success',80
    ],
    [
        '<img src="https://img.icons8.com/ios-filled/50/000000/mac-os.png"/>','success',80
    ]
];
?>
<!-- Skills-->
<section class="resume-section" id="skills">
    <div class="resume-section-content">
        <h2 class="mb-5">Skills</h2>
        <div class="subheading mb-3">Languages de programmation et outils</div>
        <ul id="slideInSkills" class="lookleft list-inline dev-icons d-flex justify-content-center justify-content-md-start flex-wrap slide-inRight">
            <?php
                foreach($languages as $language){
                    echo '<li class="card list-inline-item d-flex flex-column justify-content-center align-items-center col-4 m-2 col-sm-3 col-md-2 col-lg-2 col-xl-1 m-lg-2 shadow">
                            <div>'.$language[0].'</div>
                            <div class="progress col-6 mx-auto mb-2">
                                <div class="progress-bar bg-'.$language[1].'" role="progressbar" style="width: '.$language[2].'%" aria-valuenow="'.$language[2].'" aria-valuemin="0" aria-valuemax="100">'.$language[2].'%</div>
                            </div>
                        </li>';
                }
            ?>
            
        </ul>
        <div class="subheading mb-3">Travail</div>
        <ul class="fa-ul mb-0">
            <li>
                <span class="fa-li"><i class="fas fa-check"></i></span>
                Mobile-First, Responsive Design
            </li>
            <li>
                <span class="fa-li"><i class="fas fa-check"></i></span>
                Tests et débogage
            </li>
        </ul>
    </div>
</section>
<hr class="m-0" />