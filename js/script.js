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
})
