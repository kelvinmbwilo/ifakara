/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    $("#leftnav li").hover(function(){
        $(this).addClass("lead");
    },
    function(){
        $(this).removeClass("lead");
    });

    $("#suscribe").click(function(){
        var btn = $(this);
        //btn.parent().hide("slow");
        btn.parent().after( "<p><i class='icon-spinner icon-spin icon-2x'></i> Sending Request...</p>" );
        btn.parent().hide("slow");
        setTimeout(function(){
         btn.parent().parent().find("p").html("Thank You For Subscribing in Our Newslatter")
       }, 3000);
       setTimeout(function(){
         btn.parent().parent().find("p").hide("slow");
         btn.parent().show("slow");
       }, 5000); 
    });
});

