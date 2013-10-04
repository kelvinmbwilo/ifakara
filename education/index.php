<?php

/*
 * this page will be used to display admin home page
 * author:kelvin mbwilo
 * kelvinmbwilo@gmail.com
 */
?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ifakara Training Center</title>
        <?php include_once '../includes/headerLinks.php'; ?>
    </head>
    <body>
        <div class="btn btn-block">
           <?php include '../includes/top_navigation.php'; ?>
      </div>
        <div align="center" style="background: #E2E7E3">
        
            <!--contents-->
            <div class="row-fluid">
                <div class="span1"></div>
                <div class="span10">
                    <div class="row-fluid" >
                    <div class="span3  text-left" id="leftnav">
                        <?php include 'educationMenu.php'; ?>
                    </div>
                    <div class="span7">
                        <H2>Contents Stays Here</h2>
                    </div>
                        <div class="span2  text-left" id="leftnav">
                        <?php include '../pages/right_navigation.php'; ?>
                    </div>
                    </div>
                </div>
                <div class="span1"></div>
            </div>
               
            <!--recent events-->
            
            
            
            </div>
        </div>
        <?php include '../includes/footer.php'; ?>
        
    </body>
</html>
