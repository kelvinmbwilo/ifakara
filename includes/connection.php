<?php
mysql_connect("localhost", "root", "kevdom") or die('could not connect to the database:'.mysql_error());
 
 mysql_select_db("TTCIH") or die('Could not select a database' . mysql_error());
?>
