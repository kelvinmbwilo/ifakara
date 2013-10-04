<?php

/*
 * this page will be used to display admin home page
 * author:kelvin mbwilo
 * kelvinmbwilo@gmail.com
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ifakara Training Center - Administration Page</title>
        <?php include_once '../includes/headerLinks.php'; ?>
        <script type="text/javascript" src="<?php echo $rootdocument ?>/js/admin.js"></script>
        <script type="text/javascript" src="<?php echo $rootdocument ?>/ckeditor/ckeditor.js"></script>
    </head>
    <body>
        
        <div style="background: #F2F9FC">
           <?php include '../includes/top_navigation.php'; ?>
      </div>
        <div align="center" style="background: #E2E7E3" >
        
            <!--contents-->
            <div class="row-fluid">
                <div class="span1"></div>
                <div class="span10">
                    <div class="row-fluid" >
                    <div class="span4  text-left" id="leftnav">
                        <?php include 'adminMenu.php'; ?>
                    </div>
                   <div class="span8" id="adminContents">
                       
                   </div>
                </div>
                </div>
                <div class="span1"></div>
            </div>
               
            <!--recent events-->
            
            
            
            </div>
        
        <?php include '../includes/footer.php'; ?>
        </div>
    </body>
</html>
