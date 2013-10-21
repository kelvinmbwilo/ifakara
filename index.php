<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once '{$rootdocument}/includes/connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ifakara Training Center</title>
        <?php include_once 'includes/headerLinks.php'; ?>
    </head>
    <body>
        <div>
           <?php include 'includes/top_navigation.php'; ?>
      </div>
        <div align="center" style="">
        
            <!--contents-->
            <div class="row-fluid">
                <div class="span1"></div>
                <div class="span10">
                     <div class="row-fluid" style="">
                
                <!--slide show-->
                <div class="span9">
                    <?php include 'slideshow.php'; ?>
            <div class="row-fluid" >
                    <div class="span3 visible-desktop" id="leftnav">
                        <?php include 'includes/left_navigation.php'; ?>
                    </div>
                    <div class="span9">
                        <h2 class="text-left" id="nw">News And Events</h2>
                 <div class="row-fluid text-left" style="padding-bottom: 20px">
                    <div class="row-fluid well-small">
                    <div class="span2">
                        <img src="img/images1.jpg" style="height: 120px;width: 140px" class="img-circle">
                    </div>
                    <div class="span10">
                    <h4><a href="#">TTCIH hosted the 1st TB PCT and film roll-out training for medical institutions</a></h4>
                    <p>4th july 2013</p>
                    <!--<p>TTCIH hosted the 1st TB PCT and film roll-out training for medical institutions in the Eastern Zone on 9th July, 2013. Moreover, these training sessions will be extended to the Central, Lake, Northern, Southern, Southern...</p>-->
                    <a href="#" class="btn btn-mini btn-primary"><i class="icon-file"></i> More</a>
                    </div>
                </div>
                    <div class="row-fluid well-small">
                        <div class="span2"><img src="img/images2.jpg" style="height: 120px;width: 140px" class="img-circle"></div>
                        <div class="span10">
                        <h4><a href="#">Tanzanian Training Centre for International Health (TTCIH) become a member of The Global Health Workforce Alliance</a></h4>
                        <p>4th july 2013</p>
                        <!--<p>The Global Health Workforce Alliance (The Alliance) was created in 2006 as a common platform for action to address the Health workers crisis. Read more </p>-->
                        <a href="#" class="btn btn-mini btn-primary"><i class="icon-file"></i> More</a>
                        </div>
                    </div>
                    <div class="row-fluid well-small">
                    <div class="span2"><img src="img/images7.jpg" style="height: 120px;width: 140px" class="img-circle"></div>
                    <div class="span10">
                    <h4><a href="#">BE – Beyond Epilepsy</a></h4>
                    <p>4th july 2013</p>
                    <!--<p>An Education and Advocacy Program for Frontline Healthcare Providers in AfricaRural Tanzania, specifically the districts of Kilombero and Ulanga have been selectedto pilot an epilepsy education and advocacy program for healthcare...</p>-->
                    <a href="#" class="btn btn-mini btn-primary"><i class="icon-file"></i> More</a>
                    </div>
                </div>
            </div>
                    </div>
            </div>
                </div>
                <div class="span3">
                    <?php include 'includes/right.php'; ?>
                </div>
                </div>
</div>
                </div>
                <div class="span1"></div>
            </div>
           
            <!--recent events-->
            
            
            
            </div>
        <?php include 'includes/footer.php'; ?>
        
    </body>
</html>
