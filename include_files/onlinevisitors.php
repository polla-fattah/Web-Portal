<?php
/*************************************************************************
php easy :: online visitors counter scripts set - php include version
==========================================================================
author:      php easy code, www.phpeasycode.com
web site:    http://www.phpeasycode.com
contact:     webmaster@phpeasycode.com
*************************************************************************/

$dbfile = "include_files/onlinevisitors.db";  // path to data file
$expire = 100; // average time in seconds to consider someone online before removing from the list

if(!file_exists($dbfile)) {
	die("error: data file " . $dbfile . " not found!");
}

if(!is_writable($dbfile)) {
	die("error: data file " . $dbfile . " is not writable! please chmod it to 666!");
}

function countvisitors() {
	global $dbfile, $expire;
	$cur_ip = getip();
	$cur_time = time();
	$dbary_new = array();
	
	$dbary = unserialize(file_get_contents($dbfile));
	if(is_array($dbary)) {
		while(list($user_ip, $user_time) = each($dbary)) {
			if(($user_ip != $cur_ip) && (($user_time + $expire) > $cur_time)) {
				$dbary_new[$user_ip] = $user_time;
			}
		}
	}
	$dbary_new[$cur_ip] = $cur_time; // add record for current user
	
	$fp = fopen($dbfile, "w");
	fputs($fp, serialize($dbary_new));
	fclose($fp);
	
	$out = sprintf("%3d", count($dbary_new)); // format the result to display 3 digits with leading 0's
	return $out;
}

function getip() {
	if(isset($_server['http_x_forwarded_for'])) $ip = $_server['http_x_forwarded_for'];
	elseif(isset($_server['remote_addr'])) $ip = $_server['remote_addr'];
	else $ip = "0";
	return $ip;
}

$visitors_online = countvisitors();
?>
