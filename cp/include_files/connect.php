<?php 
 
  $server = "localhost";
  $username = "root";
  $password = "tano";
  $db_name = "portal";
  
  $db = mysql_connect($server,$username,$password) or DIE("Connection to database failed, perhaps the service is down !!");
  mysql_select_db($db_name) or DIE("Database name not available !!");

?>