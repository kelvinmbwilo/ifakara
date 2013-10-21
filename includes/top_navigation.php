<?php include_once "{$rootdocument}/includes/connection.php"; ?>
<style>
    #headerSection {background: url(<?php echo $rootdocument ?>/img/shadow.png) no-repeat center bottom #EEE;border-bottom: 1px solid #dedede;}
    #navbarnav li a{
        color: #0E4891;
    }
#headerSection {border-bottom:1px solid #fff;display: inline-block;width: 100%;z-index: 1;transition: all 800ms;z-index: 9999;}
</style>
<div class="row-fluid" id="headerSection">
    <div class="span1"></div>
    <div class="span10">
         <div class="masthead">
            <img src="<?php echo $rootdocument ?>/img/logo.jpg" class="pull-left img-circle visible-desktop">
            <h2 style="color: #0E4891;font-family: 'Bistro Script', Atrament" class="visible-desktop"><strong> Tanzania Training Center For International Health Ifakara </strong></h2>
            <div class="navbar">
              <div class="navbar-inner">
                <div class="container" id="navs">
                  
                <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </a>
                
                <a class="brand" href="<?php echo $rootdocument ?>/" style="color: #0E4891"><strong>TTCIH</strong></a>
                
                  <div class="nav-collapse collapse" >
                  <ul class="nav" id="navbarnav" >
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                         <li><a href="<?php echo $rootdocument ?>/pages/about.php">About</a></li> 
                         <li><a href="<?php echo $rootdocument ?>/pages/director.php">Director</a></li>
                         <li><a href="<?php echo $rootdocument ?>/pages/staff.php">Staff</a></li>
                         <li><a href="<?php echo $rootdocument ?>/pages/faculty.php">Faculty</a></li>
                         <li class="divider"></li>
                         <li class="nav-header">Information</li>
                         <li><a href="<?php echo $rootdocument ?>/pages/information.php">Information Center</a></li>
                         <li><a href="<?php echo $rootdocument ?>/pages/facility.php">Facilities</a></li>
                         <li><a href="<?php echo $rootdocument ?>/pages/directions.php">How To get Here</a></li>
                      </ul>
                    </li><li class="divider"></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Education <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                         <li><a href="<?php echo $rootdocument ?>/pages/about.php">Short Training Courses</a></li> 
                         <li><a href="<?php echo $rootdocument ?>/pages/director.php">Academic Programs</a></li>
                         <li><a href="<?php echo $rootdocument ?>/pages/staff.php">Seminars</a></li>
                         <li><a href="<?php echo $rootdocument ?>/pages/faculty.php">External Courses</a></li>
                      </ul>
                    </li><li class="divider"></li>
                    <li class=""><a href="<?php echo $rootdocument ?>/education/">Education</a></li>
                    <li><a href="<?php echo $rootdocument ?>/pages/FAQ.php">FAQs</a></li><li class="divider"></li>
                    <li><a href="#">Projects</a></li><li class="divider"></li>
                    <li><a href="#">Contact</a></li>
                    </ul>
                  <!--form-->
                  
                  <ul class = "nav pull-right">
                        <li><a href = "#"><img src = "<?php echo $rootdocument ?>/img/facebook.png"></a></li>
                     <li><a href = "#"><img src = "<?php echo $rootdocument ?>/img/twitter.png"></a></li>
                    <li><a href = "#"><img src = "<?php echo $rootdocument ?>/img/googleplus.png"></a></li>
                        </ul>
                </div>
                </div>
              </div>
            </div><!-- /.navbar -->
          </div>
    </div>
    <div class="span1"></div>
           
        </div>
<script>
    $(document).ready(function(){
        $("#navs .nav-collapse li").hover(function(){
            $("#navs .nav-collapse li").removeClass("active");
            $(this).addClass("active").css("background-color","blue");
        },function(){
            $(this).removeClass("active").css("background-color","inherit");
        })
})
</script>