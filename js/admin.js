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
  
});


function afterSuccess()
{     
    if($("#output").html() !== "success"){

}else{
       $("#output").html("<i class='icon-ok'></i> Added Successfull, You can contunue to do other things");
     setTimeout(function(){
         $("#output").html("");
       }, 3000); 
}
    
    $('#FileUploader').resetForm();  // reset form
    $('#uploadButton').removeAttr('disabled'); //enable submit button
    CKEDITOR.instances.description.setData( '' );

}
