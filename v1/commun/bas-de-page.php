      <!-- RETOUR EN HAUT PAGE PRESENTATION  -->
      <div class="col mt-3 mb-2">             
        <div class="col-12 text-end mt-4 pe-2">
            <a href="#" class="text-primary cursor-alias"><i class="fas fa-caret-up"> Retour en haut</i></a>
        </div>
        <!-- START Bootstrap-Cookie-Alert -->
        <div class="alert text-center cookiealert" role="alert">
            <b>Vous aimez les cookies?</b> &#x1F36A; Je les utilise pour faire fonctionner le site correctement. <a class="text-warning" href="https://www.cnil.fr/fr/cookies-les-outils-pour-les-maitriser" target="_blank">En savoir plus</a>

            <button type="button" class="btn btn-primary btn-sm acceptcookies">
                Ok
            </button>
        </div>
        <!-- END Bootstrap-Cookie-Alert -->
      </div>
        <footer class="col-12 pt-3 bg-primary">
          <div class="container-fluid d-flex flex-column">
            <div class="d-flex flex-column flex-sm-row flex-row-wrap">
              <div class="col d-lg-flex">
                <div class="col text-warning text-center text-sm-start mt-2">
                  Remerciements:
                      <ul class="list-unstyled ms-2 text-start">
                        <li><a class=" text-decoration-none cursor-alias text-white" href="https://www.refaitesvosjeux.fr/" target="_blank"> Refaites vos jeux</a></li>
                      </ul>
                </div>
  
              </div>
              <div class="col align-self-center">
                <div class="col-7 mt-4 col-sm-7 mt-sm-0 col-md-6 text-center mx-auto">
                  <img class="rotateDown" style="background-color: transparent" src="/images/design/logo-jedeveloppe.png"/>
                </div>
              </div>
            </div>
            <div class="col text-center text-warning small mt-3 pb-2">
              2020 - <br/>
              Site créé par: Je-Développe
            </div>
          </div>
          <div class="col-12 text-center pb-1">
            <?php
              $url = $_SERVER['REQUEST_URI'];
              $urlPropre = str_replace(array("?","="),"_",$url);
              $Xitipage = substr($urlPropre, 1);
            ?>
            <a href="http://www.xiti.com/xiti.asp?s=617637" title="WebAnalytics" target="_top">
              <script type="text/javascript">
              let Xitipage = <?php echo json_encode($Xitipage);?>;
              Xt_param = 's=617637&p='+Xitipage;
              try {Xt_r = top.document.referrer;}
              catch(e) {Xt_r = document.referrer; }
              Xt_h = new Date();
              Xt_i = '<img width="80" height="15" border="0" alt="" ';
              Xt_i += 'src="https://logv2.xiti.com/bcg.xiti?'+Xt_param;
              Xt_i += '&hl='+Xt_h.getHours()+'x'+Xt_h.getMinutes()+'x'+Xt_h.getSeconds();
              if(parseFloat(navigator.appVersion)>=4)
              {Xt_s=screen;Xt_i+='&r='+Xt_s.width+'x'+Xt_s.height+'x'+Xt_s.pixelDepth+'x'+Xt_s.colorDepth;}
              document.write(Xt_i+'&ref='+Xt_r.replace(/[<>"]/g, '').replace(/&/g, '$')+'" title="Audience Internet Gratuite">');
              </script>
              <noscript>
              Mesure d'audience ROI statistique webanalytics par <img width="80" height="15" src="https://logv2.xiti.com/bcg.xiti?s=617637&p=<?php echo $Xitipage;?>" alt="WebAnalytics" />
              </noscript>
            </a>
          </div>
        </footer>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <!-- Insertion du fichier js pour quelques scripts -->
        <script type="text/javascript" src="/js/scripts.js"></script>
    </div>
  </body>
</htms>

