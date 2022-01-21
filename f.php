<?php
include "include_files/connect.php";
$result = mysql_query("select * from ebooks",$db);
$numofrows= mysql_num_rows($result);
			$c=0;
			
			while($row = mysql_fetch_array($result))
				{
				
				
				
				 $n=$row['ebook_path'];
				 $z=str_replace("+","p",$n);
				 $z=str_replace("#","sharp",$z);
				 
				 mysql_query("update ebooks Set ebook_path='".$z."' where ebook_path ='".$n."'");
				 }
				  
				 
				
				
				
?>
