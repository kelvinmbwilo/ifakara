<?php
include_once '../includes/connection.php';
include 'top.php';
$query3 = mysql_query("SELECT * FROM course WHERE id='{$_GET['id']}'");
while ($row = mysql_fetch_array($query3)) {
    echo "<h3>{$row['title']}</h3>";
    echo "<hr />";
    echo "<div class='row-fluid'>{$row['description']}</div><p>";
    echo ($row['file'] == "")?"":"<a href='{$rootdocument}/uploads/{$row['file']}'><i class='icon-download'></i>download file |";
    echo ($row['url'] == "")?"":"<a href='{$row['url']}'><i class='icon-globe'></i> Visit Course Page</a>";
    echo "</p>";
}
?>

<?php
include 'bottom.php';
?>
