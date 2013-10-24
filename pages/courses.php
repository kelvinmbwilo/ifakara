<?php
include_once '../includes/connection.php';
include 'top.php';
?>
<p class="lead"><strong>Courses Offered At TTCIH</strong></p>
    <ul class="nav nav-tabs" id="myTab">
        <li class="active"  ><a href="#home" style="color: #0E4891">All</a></li>
        <li><a href="#profile" style="color: #0E4891">Short Courses</a></li>
        <li><a href="#messages" style="color: #0E4891">Academic Programs</a></li>
        <li><a href="#settings" style="color: #0E4891">External Courses</a></li>
      </ul>
<div class="tab-content">
    <div class="tab-pane active" id="home">
<script>
  $(function () {
    $('#myTab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
})
  })
</script>
    <?php 
$query = mysql_query("SELECT * FROM course");
while ($row = mysql_fetch_array($query)) {
    ?>
    <i class="icon-bookmark"></i>
        <a href='course.php?id=<?php echo $row['id'] ?>'> <?php echo $row['title'] ?></a>
    <hr />

    
    <?php
}
?>
    </div>
    <div class="tab-pane fade" id="profile">
        <h3>Short Courses</h3>
    <?php
$query1 = mysql_query("SELECT * FROM course WHERE type='Short Course'");
while ($row = mysql_fetch_array($query1)) {
     ?>
    
    <i class="icon-bookmark"></i>
        <a href='course.php?id=<?php echo $row['id'] ?>'> <?php echo $row['title'] ?></a>
    <hr />

    
    <?php
    
}
?>
    </div>
    <div class="tab-pane fade" id="messages">
        <h3>Academic Programs</h3>
    <?php
$query2 = mysql_query("SELECT * FROM course WHERE type='Academic Program'");
while ($row = mysql_fetch_array($query2)) {
     ?>
    <i class="icon-bookmark"></i>
        <a href='course.php?id=<?php echo $row['id'] ?>'> <?php echo $row['title'] ?></a>
    <hr />

    
    <?php
    
}
?>
    </div>
    <div class="tab-pane fade" id="settings">
        <h3>External Courses</h3>
    <?php
$query3 = mysql_query("SELECT * FROM course WHERE type='External Course'");
while ($row = mysql_fetch_array($query3)) {
     ?>

    <i class="icon-bookmark"></i>
        <a href='course.php?id=<?php echo $row['id'] ?>'> <?php echo $row['title'] ?></a>
    <hr />

    
    <?php
    
}
?>
    </div>
</div>

<?php
include 'bottom.php';
?>
