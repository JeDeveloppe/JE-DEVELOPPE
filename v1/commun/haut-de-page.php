<?php
@session_start();
?>
<!doctype html>
<html lang="fr" class="h-100">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-EHEWNK4WD2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-EHEWNK4WD2');
  </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Contruisons ensemble votre propre site internet, blog personnel ou d'entreprise, site e-commerce,etc... Les technologies utilisées: php, html, javascript, base de données avec mysql.">
  <meta name="author" content="WETTA René pour Je Développe">
  <title>Je Développe</title>
  <link rel="shortcut icon" type="image/png" href="/images/design/favicon.png" />
  <link rel="apple-touch-icon" href="/images/design/apple-touch-icon.png" />
  <!-- Bootstrap theme CSS -->
  <link href="/css/theme-bootstrap.css" rel="stylesheet">
  <!-- css perso -->
  <link href="/css/design.css" rel="stylesheet">
  <!-- Add fontawesome pictures-->
  <link rel="stylesheet" href="/fontawesome/css/all.css">
</head>

<body>
  <nav class="col-12 navbar navbar-expand-md navbar-dark bg-primary p-2">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <div class="col-9">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link text-white" href="/accueil/">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/softs-skills/">Mes softs skills</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
              Mes connaissances
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="/connaissances/">Languages</a></li>
              <li><a class="dropdown-item" href="/api-rest/">API-REST</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item disabled" href="#">A venir...</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/realisations/">Réalisations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/tarifs/">Tarifs</a>
          </li>
        </ul>
      </div>
      <div class="col-3">
        <ul class="navbar-nav mr-auto d-flex justify-content-end">
          <li class="nav-item">
            <a class="nav-link text-white" href="/contact/">Contact</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link text-white cursor-alias" href="https://fr.linkedin.com/in/wetta-rene-jd" target="_blank"><i class="fab fa-linkedin"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>