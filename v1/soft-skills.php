<?php
@session_start (); 
$titreDeLaPage = "WETTA René - Mes compétences soft skills";
$descriptionPage = "Retrouvez à un seul endroit toutes mes compétences soft skills: Organisé, Pédagogue, Anticipation, Curieux, Confiance aux autres, Ouverture d'esprit, Ecouter, Humour ";
include_once("./commun/haut-de-page.php");
include_once("./config.php"); //variables de configuration
?>
<div class="container">
  <div class="row mt-5">
      <div class="col">
          <h1 class="text-center">Mes compétences soft skills</h1>
      </div>
  </div>

  <div class="row my-4">
    <table class="col-11 mx-auto table table-dark table-striped table-bordered">
      <thead>
        <tr>
          <th class="text-center" scope="col">Compétence</th>
          <th class="text-center" scope="col">Explication</th>
          <th class="text-center" scope="col">Niveau</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include_once("./bdd/connexion-bdd.php");
        $reponse = $bdd->query('SELECT * FROM skills WHERE theme ="soft" ORDER BY niveau DESC');
        // On affiche chaque entrée une à une
        while ($donnees = $reponse->fetch())
        {
        ?>
            <tr>
                <td><?php echo $donnees['titre']; ?></td>
                <td><?php echo $donnees['content']; ?>.</td>
                <td>
                    <div class="progress">
                        <div class="progress-bar bg-success zoom" role="progressbar" style="width: <?php echo $donnees['niveau']; ?>%" aria-valuenow="<?php echo $donnees['niveau']; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $donnees['niveau']; ?>%</div>
                    </div>
                </td>
            </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
<?php
include_once("./commun/bas-de-page.php");
?>