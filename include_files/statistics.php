<?php
// added by hilmi
$downloadsfile = ("totaldownloads.db");
$totaldownloads = file($downloadsfile);

echo " total number of downloads : ".$totaldownloads[0];
	
?>
