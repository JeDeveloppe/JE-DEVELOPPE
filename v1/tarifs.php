<?php
@session_start (); 
$titreDeLaPage = "WETTA René - Mes compétences soft skills";
$descriptionPage = "Retrouvez à un seul endroit toutes mes compétences soft skills: Organisé, Pédagogue, Anticipation, Curieux, Confiance aux autres, Ouverture d'esprit, Ecouter, Humour ";
include_once("./commun/haut-de-page.php");
include_once("./config.php"); //variables de configuration
?>
<div class="container">
  <div class="row  mt-5">
      <div class="col">
          <h1 class="text-center">TARIFS</h1>
      </div>
  </div>

  <div class="row">
    <div class="col-12 col-md-11 mx-auto">
      La construction d'un projet est complexe, il ne peut y avoir un tarif unique par conception, voilà une ébauche de ce que l'on peut faire...<br/> Il faut discuter de vive voix, faire un croquis de chaque page, savoir exactement ce qu'il vous faut !
    </div>
  </div>

  <div class="row  p-3 mt-4">
    <div class="col-11 mx-auto d-flex flex-wrap shadow bg-secondary p-0">  
        <div class="col-12 h3 p-3 bg-info pl-4">DESIGN</div>
        <div class="col-9 p-2">Utilisation d'un thème Bootstrap</div><div class="col-3 text-center p-2">Me consulter</div>
        <div class="col-9 p-2">Utilisation d'un thème imposé</div><div class="col-3 text-center p-2">Me consulter</div>
        <div class="col-9 p-2">Création d'un logo</div><div class="col-3 text-center p-2">Me consulter</div>
    </div>
  </div>

  <div class="row  p-3 mt-4">
    <div class="col-11 mx-auto d-flex flex-wrap  shadow bg-secondary p-0">  
        <div class="col-12 h3 p-3 bg-info pl-4">PAGE STANDARD</div>
        <div class="col-9 p-2">Page d'accueil ou dit de présentation
          <ul>
            <li>Avec mise en place du bandeau des cookies</li>
          </ul>
        </div><div class="col-3 text-center p-2">Me consulter</div>
        <div class="col-9 p-2">Page de contact
          <ul>
            <li>Avec mise en place du captcha anti- robots</li>
          </ul>
        </div><div class="col-3 text-center p-2">Me consulter</div>
        <div class="col-9 p-2">Page des mentions légales</div><div class="col-3 text-center p-2">Me consulter</div>
    </div>
  </div>

  <div class="row  p-3 mt-4">
    <div class="col-11 mx-auto d-flex flex-wrap  shadow bg-secondary p-0">  
        <div class="col-12 h3 p-3 bg-info pl-4">AVEC UTILISATION D'UNE BASE DE DONNEES</div>
        <div class="col-9 p-2">Page catalogue ou assimilée
          <ul>
            <li>Avec gestion admin en Backend (création, édition d'un article)</li>
          </ul>
        </div><div class="col-3 text-center p-2">Me consulter</div>
        <div class="col-9 p-2">Page panier ou assimilée (avec ou sans espace membre)
          <ul>
            <li>Avec gestion admin en Backend</li>
            <li>Liaison bancaire</li>
          </ul>
        </div><div class="col-3 text-center p-2">Me consulter</div>
        <div class="col-9 p-2">Envoi d' emails personnalisés avec une pièce jointe
          <ul>
            <li>Prix de la conception (+50% par template supplémentaire)</li>
          </ul>
        </div><div class="col-3 text-center p-2">Me consulter</div>
        <div class="col-9 p-2">Option gestion de stock</div><div class="col-3 text-center p-2">Me consulter</div>
        <div class="col-9 p-2">Espace membre ou client (4 pages maximum)
          <ul>
            <li>Inscription - Connexion / Validation</li>
            <li>Tableau de bord (Récapitulatif de l' utilisateur, désinscription)</li>
            <li>Historique des achats</li>
            <li>Libre (à définir)</li>
          </ul>
        </div><div class="col-3 text-center p-2">Me consulter</div>
    </div>
  </div>

  <div class="row  p-3 mt-4">
    <div class="col-11 mx-auto d-flex flex-wrap  shadow bg-secondary p-0">  
        <div class="col-12 h3 p-3 bg-info pl-4">RESEAUX SOCIAUX</div>
        <div class="col-9 p-2">Création d'une page Facebook</div><div class="col-3 text-center p-2">Me consulter</div>
        <div class="col-9 p-2">Création d'une page Twitter</div><div class="col-3 text-center p-2">Me consulter</div>
        <div class="col-9 p-2">Liaison avec la page Facebook</div><div class="col-3 text-center p-2">Me consulter</div>
        <div class="col-9 p-2">Liaison avec la page Twitter</div><div class="col-3 text-center p-2">Me consulter</div>
        <div class="col-9 p-2">Liaison avec un autre média</div><div class="col-3 text-center p-2">Me consulter</div>
    </div>
  </div>

  <div class="row  p-3 mt-4">
    <div class="col-11 mx-auto d-flex flex-wrap  shadow bg-secondary p-0">  
        <div class="col-12 h3 p-3 bg-info pl-4">REFERENCEMENT</div>
        <div class="col-9 p-2">Naturel (on laisse faire)</div><div class="col-3 text-center p-2">0 HT</div>
        <div class="col-9 p-2">Forcer (Google et Bing)
        <ul>
            <li>Fichier robots.txt</li>
            <li>Sitemaps.xml</li>
          </ul>
        </div><div class="col-3 text-center p-2">Me consulter</div>
    </div>
  </div>

  <div class="row  p-3 mt-4">
    <div class="col-11 mx-auto d-flex flex-wrap shadow bg-secondary p-0">  
        <div class="col-12 h3 p-3 bg-info pl-4">OPTIONS SUPPLEMENTAIRES</div>
        <div class="col-9 p-2">Page standard</div><div class="col-3 text-center p-2">Me consulter</div>
        <div class="col-9 p-2">Page avec connexion à une base de données</div><div class="col-3 text-center p-2">Me consulter</div>
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-11 col-lg-7 mx-auto">
      PREVOIR DES FRAIS SUPPLEMENTAIRES POUR:
      <ul>
        <li>Le prix du nom de domaine</li>
        <li>Le prix de l'abonnement pour l' hébergement du domaine</li>
        <li>Les différentes accès à des APIs... (envoie de SMS, banque en ligne...)</li>
      </ul>
    </div>
  </div>
</div>
<?php
include_once("./commun/bas-de-page.php");
?>