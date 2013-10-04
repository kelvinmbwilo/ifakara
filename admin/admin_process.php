<?php
//include_once '../includes/connection.php';
if(isset($_GET['page'])){
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
    
    if($_GET['page'] == "addInternalCourse"){
      ?>

<h3>Add New Internal Course</h3>
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
      <label class="control-label" for="inputPassword">Additional Description  File</label>
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
    
     if($_GET['page'] == "addConference"){
      ?>

<h3>Add New Project</h3>
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
?>
