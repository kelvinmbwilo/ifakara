<?php
include_once '../includes/connection.php';
include 'top.php';

if(!isset($_GET['id'])){
$query3 = mysql_query("SELECT * FROM event ORDER BY date DESC");
?>
<div style="height: 900px;overflow-y: scroll">
<?php
while ($row = mysql_fetch_array($query3)) {
    
    echo "<div class='row-fluid'><div class='span2'><img src='{$rootdocument}/uploads/{$row['photo']}' style='height: 100px;width: 100px' class='img-circle pull-left'></div>";
    echo "<div class='span10'><p><a href='news.php?id={$row['id']}'>{$row['title']}</a></p>";
    ?>
    <p><a href="#" 
  onclick="
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;">
            <i class="icon-facebook-sign"></i> share 
        </a>
        
        <a href="https://twitter.com/share" class="twitter-share-button" data-via="kelvinmbwilo">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        
    <g:plus action="share" data-annotation="bubble" data-href="<?php echo "{$rootdocument}/news?id={$row['id']}";  ?>"></g:plus>
    <script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>


    </p></div></div>
    <?php
}

echo "</div>";

///////////////////////////////////////////////////////////////////////////////////
///////////////////////// Displaying a single news ///////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
}else{
    $query = mysql_query("SELECT * FROM event WHERE id='{$_GET['id']}'");
    while ($row1 = mysql_fetch_array($query)) {
        ?>
    <div class="row-fluid">
        <img src="../uploads/<?php echo $row1['photo']; ?>" style="height: 150px;width: 150px" class="img-rounded pull-left">
        <h3><?php echo $row1['title']; ?></h3>
        </div><div class="row-fluid">
        <p><?php echo $row1['description']; ?></p>
    </div>
    <?php
    }
}
?>

<?php
include 'bottom.php';
?>
