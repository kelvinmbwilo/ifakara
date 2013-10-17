<?php
include_once '../includes/connection.php';
if(isset($_GET['page'])){
    
    ////////////////////////////////////////////////
    //////////////// News And Events ///////////////
    ////////////////////////////////////////////////
    if($_GET['page'] == "addeventform"){
       ?>

<h3>Add New Event</h3>
<form class="form-horizontal" action="uploader.php" id="FileUploader" enctype="multipart/form-data" method="post">
    <input type="hidden" id="hidd" name="descr" />
  <div class="control-group">
    <label class="control-label" for="inputEmail">Title</label>
    <div class="controls text-left">
        <input type="text" name="mName" id="mName" placeholder="Event Title" class="span12"/>
    </div>
  </div>
  <div class="control-group text-left">
    <label class="control-label" for="inputPassword">Date</label>
    <div class="controls">
      <input type="text" name="eventdate" id="datepicker" placeholder="date" class="span12">
    </div>
  </div>
   <div class="control-group text-left">
    <label class="control-label" for="inputPassword">Description</label>
    <div class="controls">
        <textarea id="description" name="description"  rows="7" ></textarea>
    </div>
  </div>
  <div class="control-group text-left">
      <label class="control-label" for="inputPassword">Event Image</label>
    <div class="controls">
        <input type="file" name="mFile" id="mFile" />
        <span class="help-block">allowed extensions: jpg, png,jpeg,gif</span>
    </div>
  </div>
    <div class="control-group text-left">
    <div class="controls">
      <button type="submit" class="btn btn-primary" id="uploadButton">Add Event</button>
    </div>
  </div>
    <h3 id="output" ></h3>
</form>
        <?php
    }
    
    if($_GET['page'] == "editeventform"){
         $query = mysql_query("SELECT * FROM event WHERE id='{$_POST['id']}'");
         while ($row2 = mysql_fetch_array($query)) {
       ?>
<h3>Edit News & Events</h3>
<form class="form-horizontal" action="editEvent.php" id="FileUploader" enctype="multipart/form-data" method="post">
    <input type="hidden" id="hidd" name="descr" />
    <input type="hidden" id="idd" name="id" value="<?php echo $row2['id'] ?>"/>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Title</label>
    <div class="controls text-left">
        <input type="text" name="mName" id="mName" placeholder="Event Title" class="span12" value="<?php echo $row2['title'] ?>"/>
    </div>
  </div>
  <div class="control-group text-left">
    <label class="control-label" for="inputPassword">Date</label>
    <div class="controls">
      <input type="text" name="eventdate" id="datepicker" placeholder="date" class="span12" value="<?php echo $row2['date'] ?>">
    </div>
  </div>
   <div class="control-group text-left">
    <label class="control-label" for="inputPassword">Description</label>
    <div class="controls">
        <textarea id="description" name="description"  rows="7" ><?php echo $row2['description'] ?></textarea>
    </div>
  </div>
  <div class="control-group text-left">
      <label class="control-label" for="inputPassword"><img src="../uploads/<?php echo $row2['photo'] ?>" style="width: 70px;height: 70px"/>Change Image</label>
    <div class="controls">
        <input type="file" name="mFile" id="mFile" />
        <span class="help-block">allowed extensions: jpg, png,jpeg,gif</span>
    </div>
  </div>
    <div class="control-group text-left">
    <div class="controls">
      <button type="submit" class="btn btn-primary" id="uploadButton">Add Event</button>
    </div>
  </div>
    <h3 id="output" ></h3>
</form>
        <?php
        }
    }
    
    if($_GET['page'] == "manageEvent"){
        $query = mysql_query("SELECT * FROM event ORDER BY date ASC");
        ?>
<h3>Manage News & Events</h3>
       <?php
       $counter = 0;
        while ($row = mysql_fetch_array($query)) {
            $counter++;
            echo "<div class='row-fluid contents' style='padding-top: 6px;' id='{$row['id']}'>";
             echo "<div class='span8 text-left'>";
              echo $counter.". " .$row['title'];
             echo "</div>";
             echo "<div class='span2'>";
              echo "<a href='#' class='btn btn-primary btn-mini edit'><i class='icon-pencil'></i> Edit</a>";
             echo "</div>";
             echo "<div class='span2'>";
              echo "<a href='#' class='btn btn-danger btn-mini delete'><i class='icon-trash'></i> Delete</a>";
             echo "</div>";
            echo "</div>";
            echo "<hr />";
        }
    }
    
    if($_GET['page'] == "deleteevent"){
      $query = mysql_query("DELETE FROM event WHERE id='{$_POST['id']}'");
    }
    
    ///////////////////////////////////////////////
    ///////////////// Courses /////////////////////
    //////////////////////////////////////////////
//    Short courses
    if($_GET['page'] == "addInternalCourse"){
      ?>

<h3>Add Short Course</h3>
<form class="form-horizontal" action="uploadinternal.php" id="FileUploader" enctype="multipart/form-data" method="post">
    <input type="hidden" id="hidd" name="descr" />
  <div class="control-group">
    <label class="control-label" for="inputEmail">Course Title</label>
    <div class="controls text-left">
        <input type="text" name="mName" id="mName" placeholder="Course Title" class="span12" />
    </div>
  </div>
   <div class="control-group text-left">
    <label class="control-label" for="description">Description</label>
    <div class="controls">
        <textarea id="description" name="description"  rows="7" ></textarea>
    </div>
  </div>
  <div class="control-group text-left">
      <label class="control-label" for="inputPassword">Description  File(optional)</label>
    <div class="controls">
        <input type="file" name="mFile" id="mFile" />
        <span class="help-block">allowed extensions: pdf, doc,docs,html</span>
    </div>
  </div>
  <div class="control-group text-left">
    <label class="control-label" for="url">Course Url (option)</label>
    <div class="controls text-left">
        <input type="text" name="url" id="url" placeholder="http://www.example.com " class="span12" />
    </div>
  </div>
    <div class="control-group text-left">
    <div class="controls">
      <button type="submit" class="btn btn-primary" id="uploadButton">Add Course</button>
    </div>
  </div>
    <h3 id="output" ></h3>
</form>
        <?php  
    }
    
//    Academic Program
    if($_GET['page'] == "addProgram"){
      ?>

<h3>Add Academic Program</h3>
<form class="form-horizontal" action="uploadProgram.php" id="FileUploader" enctype="multipart/form-data" method="post">
    <input type="hidden" id="hidd" name="descr" />
  <div class="control-group">
    <label class="control-label" for="inputEmail">Course Title</label>
    <div class="controls text-left">
        <input type="text" name="mName" id="mName" placeholder="Course Title" class="span12" />
    </div>
  </div>
   <div class="control-group text-left">
    <label class="control-label" for="description">Description</label>
    <div class="controls">
        <textarea id="description" name="description"  rows="7" ></textarea>
    </div>
  </div>
  <div class="control-group text-left">
      <label class="control-label" for="inputPassword">Description  File(optional)</label>
    <div class="controls">
        <input type="file" name="mFile" id="mFile" />
        <span class="help-block">allowed extensions: pdf, doc,docs,html</span>
    </div>
  </div>
  <div class="control-group text-left">
    <label class="control-label" for="url">Course Url (option)</label>
    <div class="controls text-left">
        <input type="text" name="url" id="url" placeholder="http://www.example.com" class="span12" />
    </div>
  </div>
    <div class="control-group text-left">
    <div class="controls">
      <button type="submit" class="btn btn-primary" id="uploadButton">Add Course</button>
    </div>
  </div>
    <h3 id="output" ></h3>
</form>
        <?php  
    }
    
//    Seminars
    if($_GET['page'] == "addSemminar"){
      ?>

<h3>Add Seminar</h3>
<form class="form-horizontal" action="uploadSeminar.php" id="FileUploader" enctype="multipart/form-data" method="post">
    <input type="hidden" id="hidd" name="descr" />
  <div class="control-group">
    <label class="control-label" for="inputEmail">Seminar Title</label>
    <div class="controls text-left">
        <input type="text" name="mName" id="mName" placeholder="Course Title" class="span12" />
    </div>
  </div>
   <div class="control-group text-left">
    <label class="control-label" for="description">Description</label>
    <div class="controls">
        <textarea id="description" name="description"  rows="7" ></textarea>
    </div>
  </div>
  <div class="control-group text-left">
      <label class="control-label" for="inputPassword">Description  File(optional)</label>
    <div class="controls">
        <input type="file" name="mFile" id="mFile" />
        <span class="help-block">allowed extensions: pdf, doc,docs,html</span>
    </div>
  </div>
    <div class="control-group text-left">
    <div class="controls">
      <button type="submit" class="btn btn-primary" id="uploadButton">Add Course</button>
    </div>
  </div>
    <h3 id="output" ></h3>
</form>
        <?php  
    }
    
//    external courses
    if($_GET['page'] == "addExternalCourse"){
      ?>

<h3>Add New External Course</h3>
<form class="form-horizontal" action="uploadexternal.php" id="FileUploader" enctype="multipart/form-data" method="post">
    <input type="hidden" id="hidd" name="descr" />
  <div class="control-group">
    <label class="control-label" for="inputEmail">Course Title</label>
    <div class="controls text-left">
        <input type="text" name="mName" id="mName" placeholder="Course Title" class="span12" />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="url">Course Url</label>
    <div class="controls text-left">
        <input type="text" name="url" id="url" placeholder="http://www.example.com" class="span12" />
    </div>
  </div>
  
    <div class="control-group text-left">
    <div class="controls">
      <button type="submit" class="btn btn-primary" id="uploadButton">Add Course</button>
    </div>
  </div>
    <h3 id="output"></h3>
</form>
        <?php  
    }
    
//    delete course
    if($_GET['page'] == "deletecourse"){
      $query = mysql_query("DELETE FROM course WHERE id='{$_POST['id']}'");
    }
    
//    view one course
    if($_GET['page'] == "viewcourse"){
      $query = mysql_query("SELECT * FROM course WHERE id='{$_POST['id']}'");
      while ($row1 = mysql_fetch_array($query)) {
          echo "<p class='lead'>{$row1['title']}</p>";
          echo ($row1['description'] == "")?"":"<p>{$row1['description']}</p><hr />";
          echo ($row1['url'] == "")?"":"<p><a href='{$row1['url']}'><i class='icon-globe'></i>{$row1['url']}</a></p>";
          echo ($row1['file'] == "")?"":"</p><a href='../uploads/".$row1['file']."'><i class='icon-file-text'></i> Description file</a></p>";
      }
    }
    
//    manage course
    if($_GET['page'] == "manageCourses"){
        $query = mysql_query("SELECT * FROM course");
        ?>
<h3>Manage Courses</h3>
<ul class="nav nav-tabs" id="myTab">
  <li class="active"><a href="#all">All</a></li>
  <li><a href="#home">Short Courses</a></li>
  <li><a href="#profile">Academic Programs</a></li>
  <li><a href="#messages">External courses</a></li>
  <li><a href="#settings">Seminars</a></li>
</ul>
 
<div class="tab-content">
  <div class="tab-pane active" id="all">
     <?php 
     $query = mysql_query("SELECT * FROM course");
     ?>
     <table class="table">
        <tr><th>#No</th>
            <th>Title</th>
            <th>Type</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
       $counter = 0;
        while ($row = mysql_fetch_array($query)) {
            $counter++;
             ?>
    <tr id="<?php echo $row['id'] ?>">
        <td><?php echo $counter; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['type']; ?></td>
        <td><a href='#e' class='details'><i class='icon-th-large'></i> Details</a></td>
        <td><a href='#d' class='delete' style="color: #fa0e0e"><i class='icon-trash'></i> Delete</a></td>
    </tr>
             <?php
        }
        ?>
    </table>
  </div>
  <div class="tab-pane fade" id="home">
      <?php 
     $query = mysql_query("SELECT * FROM course WHERE type='Short Course'");
     ?>
     <table class="table">
        <tr><th>#No</th>
            <th>Title</th>
            <th>Type</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
       $counter = 0;
        while ($row = mysql_fetch_array($query)) {
            $counter++;
             ?>
    <tr id="<?php echo $row['id'] ?>">
        <td><?php echo $counter; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['type']; ?></td>
        <td><a href='#e' class='details'><i class='icon-th-large'></i> Details</a></td>
        <td><a href='#d' class='delete' style="color: #fa0e0e"><i class='icon-trash'></i> Delete</a></td>
    </tr>
             <?php
        }
        ?>
    </table>
  </div>
  <div class="tab-pane fade" id="profile">
      <?php 
     $query = mysql_query("SELECT * FROM course WHERE type='Academic Program'");
     ?>
     <table class="table">
        <tr><th>#No</th>
            <th>Title</th>
            <th>Type</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
       $counter = 0;
        while ($row = mysql_fetch_array($query)) {
            $counter++;
             ?>
    <tr id="<?php echo $row['id'] ?>">
        <td><?php echo $counter; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['type']; ?></td>
        <td><a href='#e' class='details'><i class='icon-th-large'></i> Details</a></td>
        <td><a href='#d' class='delete' style="color: #fa0e0e"><i class='icon-trash'></i> Delete</a></td>
    </tr>
             <?php
        }
        ?>
    </table>
  </div>
  <div class="tab-pane fade" id="messages">
      <?php 
     $query = mysql_query("SELECT * FROM course WHERE type='External Course'");
     ?>
     <table class="table">
        <tr><th>#No</th>
            <th>Title</th>
            <th>Type</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
       $counter = 0;
        while ($row = mysql_fetch_array($query)) {
            $counter++;
             ?>
    <tr id="<?php echo $row['id'] ?>">
        <td><?php echo $counter; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['type']; ?></td>
        <td><a href='#e' class='details'><i class='icon-th-large'></i> Details</a></td>
        <td><a href='#d' class='delete' style="color: #fa0e0e"><i class='icon-trash'></i> Delete</a></td>
    </tr>
             <?php
        }
        ?>
    </table>
  </div>
  <div class="tab-pane fade" id="settings">
      <?php 
     $query = mysql_query("SELECT * FROM course WHERE type='Seminar'");
     ?>
     <table class="table">
        <tr><th>#No</th>
            <th>Title</th>
            <th>Type</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
       $counter = 0;
        while ($row = mysql_fetch_array($query)) {
            $counter++;
             ?>
    <tr id="<?php echo $row['id'] ?>">
        <td><?php echo $counter; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['type']; ?></td>
        <td><a href='#e' class='details'><i class='icon-th-large'></i> Details</a></td>
        <td><a href='#d' class='delete' style="color: #fa0e0e"><i class='icon-trash'></i> Delete</a></td>
    </tr>
             <?php
        }
        ?>
    </table>
  </div>
</div>
 
<script>
  $(function () {
   $('#myTab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
}); 
  });
</script>

       <?php
    }
    
    /////////////////////////////////////////////////
    /////////////// Projects ///////////////////////
    ////////////////////////////////////////////////
    if($_GET['page'] == "addProject"){
      ?>

<h3>Add New Project</h3>
<form class="form-horizontal" action="uploadProject.php" id="FileUploader" enctype="multipart/form-data" method="post">
    <input type="hidden" id="hidd" name="descr" />
  <div class="control-group">
    <label class="control-label" for="inputEmail">Project Title</label>
    <div class="controls text-left">
        <input type="text" name="mName" id="mName" placeholder="Project Title" class="span12"/>
    </div>
  </div>
   <div class="control-group text-left">
    <label class="control-label" for="description">Description</label>
    <div class="controls">
        <textarea id="description" name="description"  rows="8" ></textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="url">Project URL(optional)</label>
    <div class="controls text-left">
        <input type="text" name="url" id="url" placeholder="http://www.example.com" class="span12"/>
    </div>
  </div>
    <div class="control-group text-left">
    <div class="controls">
      <button type="submit" class="btn btn-primary" id="uploadButton">Add Project</button>
    </div>
  </div>
    <h3 id="output"></h3>
</form>
        <?php  
    }
     
    
    if($_GET['page'] == "manageProject"){
        $query = mysql_query("SELECT * FROM projects");
        ?>
<h3>Manage Projects</h3>
       <?php
       $counter = 0;
        while ($row = mysql_fetch_array($query)) {
            $counter++;
            echo "<div class='row-fluid contents' style='padding-top: 6px;' id='{$row['id']}'>";
             echo "<div class='span8 text-left'>";
              echo $counter.". " .$row['title'];
             echo "</div>";
             echo "<div class='span2'>";
              //echo "<a href='#' class='btn btn-primary btn-mini edit'><i class='icon-pencil'></i> Edit</a>";
             echo "</div>";
             echo "<div class='span2'>";
              echo "<a href='#' class='btn btn-danger btn-mini delete'><i class='icon-trash'></i> Delete</a>";
             echo "</div>";
            echo "</div>";
            echo "<hr />";
        }
    }
    
    if($_GET['page'] == "deleteproject"){
      $query = mysql_query("DELETE FROM projects WHERE id='{$_POST['id']}'");
    }
    ////////////////////////////////////////////////
    /////////////// Conferences ////////////////////
    ///////////////////////////////////////////////
    if($_GET['page'] == "addConference"){
      ?>

<h3>Add New Conference</h3>
<form class="form-horizontal" action="uploadConference.php" id="FileUploader" enctype="multipart/form-data" method="post">
    <input type="hidden" id="hidd" name="descr" />
  <div class="control-group">
    <label class="control-label" for="inputEmail">Title</label>
    <div class="controls text-left">
        <input type="text" name="mName" id="mName" placeholder="Title" class="span12"/>
    </div>
  </div>
  <div class="control-group text-left">
    <label class="control-label" for="inputPassword">Date</label>
    <div class="controls">
      <input type="text" name="eventdate" id="datepicker" placeholder="Conference date" class="span12">
    </div>
  </div>
   <div class="control-group text-left">
    <label class="control-label" for="description">Description</label>
    <div class="controls">
        <textarea id="description" name="description"  rows="8" ></textarea>
    </div>
  </div>
  <div class="control-group text-left">
    <div class="controls">
      <button type="submit" class="btn btn-primary" id="uploadButton">Add Conference</button>
    </div>
  </div>
    <h3 id="output"></h3>
</form>
        <?php  
    }
}

if($_GET['page'] == "manageConference"){
        $query = mysql_query("SELECT * FROM conference");
        ?>
<h3>Manage Conferences</h3>
       <?php
       $counter = 0;
       
        while ($row = mysql_fetch_array($query)) {
            $counter++;
            echo "<div class='row-fluid contents' style='padding-top: 6px;' id='{$row['id']}'>";
             echo "<div class='span8 text-left'>";
              echo $counter.". " .$row['title'];
             echo "</div>";
             echo "<div class='span2'>";
              //echo "<a href='#' class='btn btn-primary btn-mini edit'><i class='icon-pencil'></i> Edit</a>";
             echo "</div>";
             echo "<div class='span2'>";
              echo "<a href='#' class='btn btn-danger btn-mini delete'><i class='icon-trash'></i> Delete</a>";
             echo "</div>";
            echo "</div>";
            echo "<hr />";
        }
    }
    
    if($_GET['page'] == "deleteConference"){
      $query = mysql_query("DELETE FROM conference WHERE id='{$_POST['id']}'");
    }

    if($_GET['page'] == "addUpcoming"){
        //$query = mysql_query("SELECT * FROM course ");
        ?>

     <?php 
     $query = mysql_query("SELECT * FROM course WHERE type !='Seminar'");
     ?>
     <table class="table">
        <tr><th>#No</th>
            <th>Title</th>
            <th>Type</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
       $counter = 0;
        while ($row = mysql_fetch_array($query)) {
            $counter++;
             ?>
    <tr id="<?php echo $row['id']?>">
        <td><?php echo $counter; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['type']; ?></td>
        <td><a href='#e' class='add'><i class='icon-plus'></i> Add as upcoming course</a></td>
    </tr>
             <?php
        }
        ?>
    </table>
  
 
<script>
  $(function () {
   $('#myTab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
}) 
  })
</script>
<table class="table">
    <tr><th>#No</th>
        <th>Title</th>
        <th>Type</th>
        <th colspan="2">Action</th>
    </tr>
       <?php
       $counter = 0;
        while ($row = mysql_fetch_array($query)) {
            $counter++;
             ?>
    <tr id="<?php echo $row['id'] ?>">
        <td><?php echo $counter; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['type']; ?></td>
        <td><a href='#e' class='details'><i class='icon-th-large'></i> Details</a></td>
        <td><a href='#d' class='delete' style="color: #fa0e0e"><i class='icon-trash'></i> Delete</a></td>
    </tr>
             <?php
        }
        ?>
    </table>
       <?php
    }
    
    if($_GET['page'] == "manageUpcoming"){
        $query = mysql_query("SELECT * FROM upcoming_course");
        ?>
<h3>Manage Upcoming Courses</h3>
<div class="row-fluid">
    <div class="span7"><b>Course Title </b></div>
    <div class="span3"><b>Start Date</b></div>
    <div class="span2"></div>
</div>
<?php
       $counter = 0;
        while ($row = mysql_fetch_array($query)) {
            $counter++;
            $query1 = mysql_query("SELECT * FROM course WHERE id='{$row['course_id']}'");
            
            echo "<div class='row-fluid contents' style='padding-top: 6px;' id='{$row['id']}'>";
             echo "<div class='span7 text-left'>";
              while ($row3 = mysql_fetch_array($query1)) {
                echo $counter.". " .$row3['title'];
              }
             echo "</div>";
             echo "<div class='span3'>";
              echo "{$row['date']}";
             echo "</div>";
             echo "<div class='span2'>";
              echo "<a href='#' class='btn btn-danger btn-mini delete'><i class='icon-trash'></i> Delete</a>";
             echo "</div>";
            echo "</div>";
            echo "<hr />";
        }
    }
    
    if($_GET['page'] == "addUpcomingprocess"){
      $query = mysql_query("INSERT INTO  upcoming_course VALUES ('','{$_POST['id']}','{$_POST['date']}')")or die(mysql_error());
      die("sucess");
    }
    
    if($_GET['page'] == "deleteUpcoming"){
      $query = mysql_query("DELETE FROM conference WHERE id='{$_POST['id']}'");
    }
    ?>
