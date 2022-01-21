<?php
  
	// added by hilmi
$downloadsFile = ("totaldownloads.db");
$downloads = file($downloadsFile);
$downloads[0] ++;

$fp = fopen($downloadsFile , 'w');
// end of hilmi code

	$x = $downloads[0];
	echo $x;
	fwrite($fp , "$x");// hilmi
  fclose($fp); //hilmi

		//header("Location: $_GET[path]");
?>