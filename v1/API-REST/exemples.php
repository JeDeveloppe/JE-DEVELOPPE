<?php
@session_start ();
require("../config.php");
$pathImage = "/images/competences/";
require("../commun/haut-de-page.php");
?>
<h1 class="col-12 text-center mt-5">API REST avec Curl</h1>
    <div class="container">

        <div class="row my-4">
            <div class="col-11 mx-auto">
                <p class="lead">
                Faire une requête GET, POST...<br/>
                Récupérer des informations sur le serveur souvent en Json...<br/>
                Afficher les données sur son site web...
                </p>
            </div>
        </div>

        <div class="col-12 display-6 mt-5">Affichage de personnes avec <a href="https://randomuser.me/" class="text-decoration-none text-primary">RandomUser</a>:</div>
        <div class="col-12 small text-warning">API sans key</div>
            <div class="row justify-content-around align-items-start mt-4" id="gens">
                <?php
                    //url de destination
                    $url = 'https://randomuser.me/api/?results=8';

                    //initialisation de la connexion
                    $curl = curl_init($url);

                    //quelques options
                    curl_setopt_array($curl, [
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_TIMEOUT => 5,
                    ]);

                    //execution de la demande
                    $json_reponse = curl_exec($curl);

                    if($json_reponse === false || curl_getinfo($curl, CURLINFO_HTTP_CODE) !== 200){
                        echo '<h1>Erreur de requete !</h1>';


                    }else{
                        $jsonDie = json_decode($json_reponse, true);
                        $data = $jsonDie['results'];

                        foreach($data as $people){
                            echo '  <div class="card col-11 col-sm-8 col-md-5 col-lg-4 col-xl-5 p-0 m-2">
                                        <div class="card-header">'.$people['name']['title'].' '.$people['name']['first'].' '.$people['name']['last'].'</div>
                                        <div class="card-body d-flex align-items-start">
                                            <img src="'.$people['picture']['medium'].'" alt"image de la personne" />
                                            <table class="table table-sm ms-1">
                                                <tr><td>Street:</td><td>'.$people['location']['street']['number'].' '.$people['location']['street']['name'].'</td></tr>
                                                <tr><td>City:</td><td>'.$people['location']['city'].'</td></tr>
                                                <tr><td>Phone:</td><td>'.$people['phone'].'</td></tr>
                                            </table>
                                        </div>
                                    </div>';
    
    
                        }

                    }
                    //on ferme la requete
                    curl_close($curl);
                ?>
            </div>

        <div class="col-12 display-6 mt-5">La météo avec <a href="https://openweathermap.org/" class="text-decoration-none text-primary">OpenWeather</a>:</div>
        <div class="col-12 small text-warning">API avec une key</div>
            <div class="row justify-content-around mt-4" id="meteo">
                <?php
                    //url de destination
                    $weatherApiKey = "e3fe1defe2e5801b4cd9294766a7291a";
                    $url = 'http://api.openweathermap.org/data/2.5/weather?q=strasbourg,fr&appid='.$weatherApiKey.'&lang=fr&units=metric';

                    //initialisation de la connexion
                    $curl = curl_init($url);

                    //quelques options
                    curl_setopt_array($curl, [
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_TIMEOUT => 5,
                    ]);

                    //execution de la demande
                    $json_reponse = curl_exec($curl);

                    if($json_reponse === false || curl_getinfo($curl, CURLINFO_HTTP_CODE) !== 200){
                        echo '<h1>Erreur de requete !</h1>';
                        var_dump(curl_error($curl));
                    }else{
                        $jsonDie = json_decode($json_reponse, true);
                        $data = $jsonDie;
                    ?>
                    <div class="card col-11 col-md-6 mx-auto p-0">
                        <div class="card-header"><?php echo $data['name'].' le '.date('d-m-Y', time());?></div>
                        <div class="card-body">
                            <table class="table table-sm">
                                <tbody>
                                    <tr><td>Lever du soleil:</td><td><?php echo date('H:i',$data['sys']['sunrise']); ?></td></tr>
                                    <tr><td>Coucher du soleil:</td><td><?php echo date('H:i',$data['sys']['sunset']); ?></td></tr>
                                    <tr><td>Température min:</td><td><?php echo $data['main']['temp_min']; ?> °C</td></tr>
                                    <tr><td>Température max:</td><td><?php echo $data['main']['temp_max']; ?> °C</td></tr>
                                    <tr><td>Pression atmosphérique:</td><td><?php echo $data['main']['pressure']; ?> hPa</td></tr>
                                    <tr><td>Humidité:</td><td><?php echo $data['main']['humidity']; ?> %</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php
                    }
                    curl_close($curl);
                ?>
            </div>
    </div>

<?php
require("../commun/bas-de-page.php");
?>