<style>
    #cont li a{
        color: #196456;
        text-align: left;
        font-size: 0.8em
    }
</style>



<div class="row-fluid" style="background: url(<?php echo $rootdocument ?>/img/back1.jpg);border-radius: 10px;margin-bottom: 5px;">
    <h3>Upcoming Courses</h3>
    <div class="row-fluid" id="cont" style="background: #f6f8fc">
        <?php
        mysql_connect("localhost", "root", "kevdom") or die('could not connect to the database:'.mysql_error());
        mysql_select_db("TTCIH") or die('Could not select a database' . mysql_error());
        $query = mysql_query("SELECT * FROM upcoming_course ORDER BY date DESC LIMIT 5")or die(mysql_error());
        ?>
        <ul class="nav nav-tabs nav-stacked">
            <?php
            if(mysql_num_rows($query) == 0){
                echo "<li>There Are No Upcoming Courses</li>"; 
            }else{
            while ($row = mysql_fetch_array($query)) {
                $date  = date("l F,j Y", strtotime($row['date']));
                $query1 = mysql_query("SELECT * FROM course WHERE id='{$row['course_id']}'");
                while ($row3 = mysql_fetch_array($query1)) {
                echo "<li><a href='#'><span>Disaster medicine and health crisis management - University of Athens</span>"; 
                  echo "<br><span style='color:black; font-size: 0.7em'>{$date}</span></a></li>";  
                }
              }
             }
                    ?>
        </ul>
    </div>
</div>

<form method="get" action="http://www.google.com/custom" target="_top" class="navbar-form form-search">
     <input name="domains" value="healthtrainingifakara.org" type="hidden" />
     <div class="input-append">
        <input name="q" size="14" value="" type="text" class="search-query" placeholder="G-Search">
        <button type="submit" name="sa" class="btn btn-primary" title="Google Search" id="search-submit"><i class="icon-search icon-white"></i></button>
      </div>
<br />
        <input name="sitesearch" value="" checked="checked" type="radio" /><font color="#000000" size="-1">Web</font> 
        <input name="sitesearch" value="healthtrainingifakara.org" type="radio" /><font color="#000000" size="-1">TTCIH</font>
        <input name="client" value="pub-4398475047992702" type="hidden" /> <input name="forid" value="1" type="hidden" /><input name="ie" value="ISO-8859-1" type="hidden" /><input name="oe" value="ISO-8859-1" type="hidden" /><input name="safe" value="active" type="hidden" /><input name="cof" value="GALT:#008000;GL:1;DIV:#336699;VLC:663399;AH:center;LBGC:336699;ALC:0000FF;LC:0000FF;T:000000;GFNT:0000FF;GIMP:0000FF;FORID:1" type="hidden" /><input name="hl" value="en" type="hidden" /></td>
</form>

<div class="row-fluid" style="background: url(<?php echo $rootdocument ?>/img/back1.jpg);border-radius: 10px;margin-bottom: 1px;">
    <h3>Our Partners</h3>
    <div class="row-fluid text-left" id="cont" style="background: #f6f8fc">
        <ul class="nav nav-tabs nav-stacked">
                            <li><a href="http://www.moh.go.tz/" target="blank">
                                   <i class="icon-globe icon-large"></i>  Tanzanian Ministry of Health & Social Welfare
                                </a></li>
                            <li><a href="http://www.novartisfoundation.org/page/content/index.asp?MenuID=594&ID=1797&Menu=3&Item=44.17" target="blank">
                                  <i class="icon-globe icon-large"></i>   Novartis Foundation for Sustainable Development
                                </a></li>
                            <li><a href="http://www.sti.ch/" target="blank">
                                   <i class="icon-globe icon-large"></i>  Swiss Tropical and Public Health Institute
                                </a></li>
                            <li><a href="http://www.sdc.admin.ch/en/Home/Countries/Eastern_and_Central_Africa/Tanzania" target="blank">
                                   <i class="icon-globe icon-large"></i>  Swiss Agency for Development & Cooperation
                                </a></li>
                            <li><a href="http://en.uoa.gr/" target="blank">
                                   <i class="icon-globe icon-large"></i>  The University of Athens
                                </a></li>
                                
                        </ul>
       
    </div>
</div>

<!--facebook intergration-->
<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1" type="text/javascript"></script><fb:like-box href="http://www.facebook.com/pages/Tanzanian-Training-Centre-for-International-Health/196371877058261" width="270" show_faces="true" stream="false" header="true"></fb:like-box>
		<!--  Raw HTML content: [end] -->
