<section class="resume-section-bottom">
    <div class="resume-section-content container text-center mb-2">
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
        <div class="col-12 text-center small">
            2020 - 2022
        </div>
    </div>
</section>