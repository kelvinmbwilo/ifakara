<div class="row-fluid">
    <div class="span1"></div>
    <div class="span10">
         <div class="masthead">
            <img src="<?php echo $rootdocument ?>/img/logo.jpg" class="pull-left img-circle">
            <h2 style="color: #196456;font-family: 'Bistro Script', Atrament "> Tanzania Training Center For International Health Ifakara</h2>
            <div class="navbar" style="padding-top: 10px">
              <div class="navbar-inner">
                <div class="container" id="navs">
                  
                <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </a>
                
                <a class="brand active" href="<?php echo $rootdocument ?>/"><strong>TTCIH</strong></a>
                
                  <div class="nav-collapse collapse" >
                  <ul class="nav" >
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
                    </li>
                    <li class=""><a href="<?php echo $rootdocument ?>/education/">Education</a></li>
                    <li><a href="<?php echo $rootdocument ?>/pages/FAQ.php">FAQs</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Contact</a></li>
                    </ul>
                  <!--dropdown-->
                     <form class="navbar-form form-search pull-right" action="search.php" method="post">
                        <div class="input-append">
                          <input type="text" class="search-query" placeholder="Search" id="searchpeople" name="querystring">
                          <button type="submit" class="btn btn-primary" title="search" id="search-submit"><i class="icon-search icon-white"></i></button>
                        </div>
                    </form>
                  
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
            $(this).addClass("active")
        },function(){
            $(this).removeClass("active")
        })
})
</script>