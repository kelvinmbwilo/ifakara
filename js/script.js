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



$(".aplycourse").click(function(){
         var modal = "";
                modal +="<div id='addUser' class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='false'>";
                modal += "<div class='modal-header'>";
                modal += "<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>";
                modal += "<h3>Course Application Form</h3>";
                modal += "</div>";
                modal += "<div class='modal-body'>";
                modal += "<form>";
                modal +="<p>First Name: &nbsp;&nbsp;&nbsp; <input type='text' placeholder='First Name' name='email' /></p>";
                modal +="<p>Middle Name: &nbsp;&nbsp;<input type='text' placeholder='Middle Name' name='pass' /></p>";
                modal +="<p>Last Name: &nbsp;&nbsp;&nbsp;&nbsp;<input type='text' placeholder='Last Name' name='email' /></p>";
                modal +="<p>Email Address: <input type='text' placeholder='Email Address' name='pass' /></p>";
                modal +="<p>Phone Number: &nbsp;&nbsp;<input type='text' placeholder='Last Name' name='email' /></p>";
                modal +="<p>Postal Adddress: <input type='text' placeholder='Email Address' name='pass' /></p>";
                modal +="<p>Cv Attachment: <input type='file' placeholder='Email Address' name='pass' /></p>";
                modal +="<p id='errorarea' style='color:red'><p>";
                modal += "</div>";
                modal += "<div class='modal-footer'>";
                //modal += "<a href='#' id='closemodal' class='btn' data-dismiss='modal' aria-hidden='true'>Cancel</a>";
                modal += "<a href='#'  class='btn btn-primary' id='closemodal'>Apply</a>"; 
                modal += "</div>";
                modal += "</form>";
                modal += "</div>";
                $("body").append(modal);
                $("#addUser input[type=text]").focus(function(){
                    $("#addUser #errorarea").empty().hide();
                });
                $('#addUser').modal("show");
                $("#closemodal").click(function(){
                    $("#addUser #errorarea").empty().hide();
                     if($("#addUser input[type=text]").val() === ""){
                         alert("please fill all field");
                     }else{
                     var email = $("#addUser input[name=email]").val();
                     var pass = $("#addUser input[name=pass]").val();
                     $.post("includes/form_processor.php?page=login",{email:email,pass:pass},function(data){
                         //alert(data);
                         if(data ==="success"){
                             window.location.assign("admin.php?page=addCompany");
                         }else{
                         $("#addUser #errorarea").append(data).show("slow");
                         
                         }
                    });
                     }
                });
    });
});