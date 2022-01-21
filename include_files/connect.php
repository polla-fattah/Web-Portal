<?php
 
  $server = "localhost";
  $username = "root";
  $password = "tano";
  $db_name = "portal";
  
  $db = mysql_connect($server,$username,$password) or die("connection to database failed, perhaps the service is down !!");
  mysql_select_db($db_name) or die("database name not available !!");

?>