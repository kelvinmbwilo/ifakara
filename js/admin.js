/* 
 * This file will define all admin tasks
 * and open the template in the editor.
 */
$(document).ready(function(){
    ////////////////////////////
    /////////events////////////
    $("#addEvent").click(function(){
       $("#adminContents").html("<i class='icon-spinner icon-spin icon-4x'></i>");
       $("#adminContents").load("admin_process.php?page=addeventform",function(){
           $( "#datepicker" ).datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat:"yy-mm-dd"
            });
           
           CKEDITOR.replace( 'description' );
           $('#FileUploader').on('submit', function(e) {
                e.preventDefault();
                var editor_data = CKEDITOR.instances.description.getData();
                $("#hidd").attr("value",editor_data);
                $('#uploadButton').attr('disabled', ''); // disable upload button
                //show uploading message
                $("#output").html("<i class='icon-spinner icon-spin icon-2x'></i><span>Uploading...</span></div>");
                $(this).ajaxSubmit({
                beforeSerialize: function(){ ; },
                target: '#output',
                success:  afterSuccess //call function after success
                });
            });
        });
    });
   
    $("#manageEvent").click(function(){
       $("#adminContents").html("<i class='icon-spinner icon-spin icon-4x'></i>");
       $("#adminContents").load("admin_process.php?page=manageEvent",function(){
           
          //delete event
          $(".delete").click(function(){
            var btn = $(this).parent().parent();
            var id = $(this).parent().parent().attr("id");
            $(this).hide().parent().append("<span>Are You Sure <br /> <a href='#' id='yes'><i class='icon-ok'></i> Yes</a> <a href='#' id='no'> <i class='icon-remove'></i> No</a></span>");
            $("#no").click(function(){
                $(this).parent().parent().find(".delete").show("slow");
                $(this).parent().parent().find("span").remove();
            });
            $("#yes").click(function(){
                $(this).parent().html("<i class='icon-spinner icon-spin'></i>deleting...");
                $.post("admin_process.php?page=deleteevent",{id:id},function(data){
                  btn.hide("slow").next("hr").hide("slow");
               });
            });

        });
    
    $(".edit").click(function(){
        var id = $(this).parent().parent().attr("id");
        $("#adminContents").html("<i class='icon-spinner icon-spin icon-4x'></i>");
        $("#adminContents").load("admin_process.php?page=editeventform",{id:id},function(){
           $( "#datepicker" ).datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat:"yy-mm-dd"
            });
           
           CKEDITOR.replace( 'description' ); 
           $('#FileUploader').on('submit', function(e) {
                e.preventDefault();
                var editor_data = CKEDITOR.instances.description.getData();
                $("#hidd").attr("value",editor_data);
                $('#uploadButton').attr('disabled', ''); // disable upload button
                //show uploading message
                $("#output").html("<i class='icon-spinner icon-spin icon-2x'></i><span>Uploading...</span></div>");
                $(this).ajaxSubmit({
                beforeSerialize: function(){ ; },
                target: '#output',
                success:  afterEdit //call function after success
                });
            });
        });
    });

       });
    });
   
   
   /////////////////////////////////////////////////
   ////////////courses/////////////////////////////
   ////////////////////////////////////////////////
   $("#addCourse").click(function(){
       $("#adminContents").html("<i class='icon-spinner icon-spin icon-4x'></i>");
       $("#adminContents").load("admin_process.php?page=addInternalCourse",function(){
          CKEDITOR.replace( 'description' ); 
          $('#FileUploader').on('submit', function(e) {
                e.preventDefault();
                var editor_data = CKEDITOR.instances.description.getData();
                $("#hidd").attr("value",editor_data);
                $('#uploadButton').attr('disabled', ''); // disable upload button
                //show uploading message
                $("#output").html("<i class='icon-spinner icon-spin icon-2x'></i><span>Uploading...</span></div>");
                $(this).ajaxSubmit({
                target: '#output',
                success:  afterSuccess //call function after success
                });
            });
       });
   });
   
   $("#addProgram").click(function(){
       $("#adminContents").html("<i class='icon-spinner icon-spin icon-4x'></i>");
       $("#adminContents").load("admin_process.php?page=addProgram",function(){
          CKEDITOR.replace( 'description' ); 
          $('#FileUploader').on('submit', function(e) {
                e.preventDefault();
                var editor_data = CKEDITOR.instances.description.getData();
                $("#hidd").attr("value",editor_data);
                $('#uploadButton').attr('disabled', ''); // disable upload button
                //show uploading message
                $("#output").html("<i class='icon-spinner icon-spin icon-2x'></i><span>Uploading...</span></div>");
                $(this).ajaxSubmit({
                target: '#output',
                success:  afterSuccess //call function after success
                });
            });
       });
   });
   
   $("#addSeminar").click(function(){
       $("#adminContents").html("<i class='icon-spinner icon-spin icon-4x'></i>");
       $("#adminContents").load("admin_process.php?page=addSemminar",function(){
          CKEDITOR.replace( 'description' ); 
          $('#FileUploader').on('submit', function(e) {
                e.preventDefault();
                var editor_data = CKEDITOR.instances.description.getData();
                $("#hidd").attr("value",editor_data);
                $('#uploadButton').attr('disabled', ''); // disable upload button
                //show uploading message
                $("#output").html("<i class='icon-spinner icon-spin icon-2x'></i><span>Uploading...</span></div>");
                $(this).ajaxSubmit({
                target: '#output',
                success:  afterSuccess //call function after success
                });
            });
       });
   });
   
   $("#addSeminar").click(function(){
       $("#adminContents").html("<i class='icon-spinner icon-spin icon-4x'></i>");
       $("#adminContents").load("admin_process.php?page=addSemminar",function(){
          CKEDITOR.replace( 'description' ); 
          $('#FileUploader').on('submit', function(e) {
                e.preventDefault();
                var editor_data = CKEDITOR.instances.description.getData();
                $("#hidd").attr("value",editor_data);
                $('#uploadButton').attr('disabled', ''); // disable upload button
                //show uploading message
                $("#output").html("<i class='icon-spinner icon-spin icon-2x'></i><span>Uploading...</span></div>");
                $(this).ajaxSubmit({
                target: '#output',
                success:  afterSuccess //call function after success
                });
            });
       });
   });
   
   $("#addExtCourse").click(function(){
       $("#adminContents").html("<i class='icon-spinner icon-spin icon-4x'></i>");
       $("#adminContents").load("admin_process.php?page=addExternalCourse",function(){
           $('#FileUploader').on('submit', function(e) {
                e.preventDefault();
                $('#uploadButton').attr('disabled', ''); // disable upload button
                //show uploading message
                $("#output").html("<i class='icon-spinner icon-spin icon-2x'></i><span>Uploading...</span></div>");
                $(this).ajaxSubmit({
                target: '#output',
                success:  afterSuccess //call function after success
                });
            });
       });
});

    $("#manageCourses").click(function(){
           $("#adminContents").html("<i class='icon-spinner icon-spin icon-4x'></i>");
           $("#adminContents").load("admin_process.php?page=manageCourses",function(){
              $(".delete").click(function(){
                var btn = $(this).parent().parent();
                var id = $(this).parent().parent().attr("id");
                $(this).hide().parent().append("<span>Are You Sure <br /> <a href='#' id='yes'><i class='icon-ok'></i> Yes</a> <a href='#' id='no'> <i class='icon-remove'></i> No</a></span>");
                $("#no").click(function(){
                    $(this).parent().parent().find(".delete").show("slow");
                    $(this).parent().parent().find("span").remove();
                });
                $("#yes").click(function(){
                    $(this).parent().html("<i class='icon-spinner icon-spin'></i>deleting...");
                    $.post("admin_process.php?page=deletecourse",{id:id},function(data){
                      btn.hide("slow").next("hr").hide("slow");
                   });
                });
              
              });
          
//          details
             $(".details").each(function(){
                var id1 = $(this).parent().parent().attr("id");
                $(this).tooltipster({
    //                theme: '.tooltipster-shadow',
                    interactive: true,
                    arrow: true,
                    speed:500,
                    maxWidth:650,
                    position:'left',
                    animation:'fade',
                    content: 'please wait....',
                functionBefore: function(origin, continueTooltip) {

                    // we'll make this function asynchronous and allow the tooltip to go ahead and show the loading notification while fetching our data
                    continueTooltip();

                    // next, we want to check if our data has already been cached
                    if (origin.data('ajax') !== 'cached') {
                        $.ajax({
                            type: 'POST',
                            data:{
                                id:id1
                            },
                            url: "admin_process.php?page=viewcourse",
                            success: function(data) {
                            // update our tooltip content with our returned data and cache it
                            origin.tooltipster('update', data).data('ajax', 'cached');
                            }
                        });
                     }
                   }
              });
            });
           });
    });

//////////////////////////////////////////////////
///////////// Projects //////////////////////////
/////////////////////////////////////////////////
    $("#addProject").click(function(){
      $("#adminContents").html("<i class='icon-spinner icon-spin icon-4x'></i>");
      $("#adminContents").load("admin_process.php?page=addProject",function(){
          CKEDITOR.replace( 'description' ); 
          $('#FileUploader').on('submit', function(e) {
               e.preventDefault();
               var editor_data = CKEDITOR.instances.description.getData();
                $("#hidd").attr("value",editor_data);
               $('#uploadButton').attr('disabled', ''); // disable upload button
               //show uploading message
               $("#output").html("<i class='icon-spinner icon-spin icon-2x'></i><span>Uploading...</span></div>");
               $(this).ajaxSubmit({
               target: '#output',
               success:  afterSuccess //call function after success
               });
           });
      });
});

  $("#manageProject").click(function(){
      $("#adminContents").html("<i class='icon-spinner icon-spin icon-4x'></i>");
      $("#adminContents").load("admin_process.php?page=manageProject",function(){
          //delete project
          $(".delete").click(function(){
            var btn = $(this).parent().parent();
            var id = $(this).parent().parent().attr("id");
            $(this).hide().parent().append("<span>Are You Sure <br /> <a href='#' id='yes'><i class='icon-ok'></i> Yes</a> <a href='#' id='no'> <i class='icon-remove'></i> No</a></span>");
            $("#no").click(function(){
                $(this).parent().parent().find(".delete").show("slow");
                $(this).parent().parent().find("span").remove();
            });
            $("#yes").click(function(){
                $(this).parent().html("<i class='icon-spinner icon-spin'></i>deleting...");
                $.post("admin_process.php?page=deleteproject",{id:id},function(data){
                  btn.hide("slow").next("hr").hide("slow");
               });
            });

        });
      });
});

/////////////////////////////////////////////////
////////////////// Conferences //////////////////
/////////////////////////////////////////////////
   $("#addConference").click(function(){
      $("#adminContents").html("<i class='icon-spinner icon-spin icon-4x'></i>");
      $("#adminContents").load("admin_process.php?page=addConference",function(){
          $( "#datepicker" ).datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat:"yy-mm-dd"
            });
          CKEDITOR.replace( 'description' ); 
          $('#FileUploader').on('submit', function(e) {
               e.preventDefault();
               var editor_data = CKEDITOR.instances.description.getData();
                $("#hidd").attr("value",editor_data);
               $('#uploadButton').attr('disabled', ''); // disable upload button
               //show uploading message
               $("#output").html("<i class='icon-spinner icon-spin icon-2x'></i><span>Uploading...</span></div>");
               $(this).ajaxSubmit({
               target: '#output',
               success:  afterSuccess //call function after success
               });
           });
      });
});

$("#manageConference").click(function(){
      $("#adminContents").html("<i class='icon-spinner icon-spin icon-4x'></i>");
      $("#adminContents").load("admin_process.php?page=manageConference",function(){
          //delete project
          $(".delete").click(function(){
            var btn = $(this).parent().parent();
            var id = $(this).parent().parent().attr("id");
            $(this).hide().parent().append("<span>Are You Sure <br /> <a href='#' id='yes'><i class='icon-ok'></i> Yes</a> <a href='#' id='no'> <i class='icon-remove'></i> No</a></span>");
            $("#no").click(function(){
                $(this).parent().parent().find(".delete").show("slow");
                $(this).parent().parent().find("span").remove();
            });
            $("#yes").click(function(){
                $(this).parent().html("<i class='icon-spinner icon-spin'></i>deleting...");
                $.post("admin_process.php?page=deleteConference",{id:id},function(data){
                  btn.hide("slow").next("hr").hide("slow");
               });
            });

        });
      });
});
  
  
  //////////////////////////////////////////////////
  ////////////// Manage Upcoming Courses ///////////
  /////////////////////////////////////////////////
  $("#addupcoming").click(function(){
      $("#adminContents").html("<i class='icon-spinner icon-spin icon-4x'></i>");
      $("#adminContents").load("admin_process.php?page=addUpcoming",function(){
         var out  = "<span><input type='text' id='date' placeholder = 'Start Date'/><br /> <a class='btn btn-min btn-primary'>save</a></span>";
         $(".add").click(function(){
           $(".add").show("show");
           $("td span").remove();
           var id = $(this).parent().parent().attr("id"); 
           $(this).hide("slow").parent().append(out);
           $( "#date" ).datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat:"yy-mm-dd"
            });
           $("td span .btn").click(function(){
               var date = $("td span input").val();
               $("td span").html("<i class='icon-spinner icon-spin icon-2x'></i> Please Wait...");
               $.post("admin_process.php?page=addUpcomingprocess",{date:date,id:id},function(data){
                   if(data === "sucess"){
                       $("td span").html("Course Was added Successfull <br />to the list of Upcoming Courses");
                       setTimeout(function(){
                        $(".add").show("show");
                        $("td span").remove();
                      }, 5000);
                   }
               });
            });
         });
      });
});
  
  $("#manageUpcoming").click(function(){
      $("#adminContents").html("<i class='icon-spinner icon-spin icon-4x'></i>");
      $("#adminContents").load("admin_process.php?page=manageUpcoming",function(){
          //delete project
          $(".delete").click(function(){
            var btn = $(this).parent().parent();
            var id = $(this).parent().parent().attr("id");
            $(this).hide().parent().append("<span>Are You Sure <br /> <a href='#' id='yes'><i class='icon-ok'></i> Yes</a> <a href='#' id='no'> <i class='icon-remove'></i> No</a></span>");
            $("#no").click(function(){
                $(this).parent().parent().find(".delete").show("slow");
                $(this).parent().parent().find("span").remove();
            });
            $("#yes").click(function(){
                $(this).parent().html("<i class='icon-spinner icon-spin'></i>deleting...");
                $.post("admin_process.php?page=deleteConference",{id:id},function(data){
                  btn.hide("slow").next("hr").hide("slow");
               });
            });

        });
      });
});
});


function afterSuccess()
{     
    if($("#output").html() !== "success"){
    $('#uploadButton').removeAttr('disabled');
}else{
      $('#FileUploader').resetForm();  // reset form
    $('#uploadButton').removeAttr('disabled'); //enable submit button
    CKEDITOR.instances.description.setData( '' );
       $("#output").html("<i class='icon-ok'></i> Added Successfull, You can contunue to do other things");
     setTimeout(function(){
         $("#output").html("");
       }, 3000); 
}
}

function afterEdit()
{     
    if($("#output").html() !== "success"){
    $('#uploadButton').removeAttr('disabled');
}else{
    $("#output").html("<i class='icon-ok'></i> Edited Successfull, Redirecting please wait....");
     setTimeout(function(){
         $("#manageEvent").trigger("click");
       }, 3000); 
}
    
    

}
