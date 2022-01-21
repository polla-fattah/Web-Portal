<?php

/**
* @author    eric sizemore <admin@secondversion.com>
* @package   sv's simple counter
* @link      www.secondversion.com
* @version   1.7.0
* @copyright (c) 2006 - 2008 eric sizemore
* @license   {@see license.txt} gnu public license
*/

// #################### define important constants ####################
// there should be no need to edit these
define('count_file', 'include_files/totalvisitors.db');
define('ip_file', 'include_files/ips.db');

// ######################## user configuration ########################
// edit the following.. true = yes, false = no

// use file locking?
define('use_flock', true);

// count only unique visitors?
define('only_unique', true);

// show count as images?
define('use_images', false);

// path to the images
//define('img_dir', 'counter/images/');

// image extension
//define('img_ext', '.gif');

// ############################ functions #############################
/**
* we use this function to open, read/write to files.
*
* @param  string   filename
* @param  string   mode (r, w, a, etc..)
* @param  string   if writing to the file, the data to write
* @return mixed
*/
function fp($file, $mode, $data = '')
{
	if (!file_exists($file) or !is_writable($file))
	{
		trigger_error("error: '<code>" . htmlspecialchars($file) . "</code>' does not exist or is not writable.");
	}

	if (!($fp = @fopen($file, $mode)))
	{
		trigger_error("error: '<code>" . htmlspecialchars($file) . "</code>' could not be opened.");
	}

	if (use_flock and @flock($fp, lock_ex))
	{
		if ($mode == 'r')
		{
			return @fread($fp, filesize($file));
		}
		else
		{
			@fwrite($fp, $data);
		}
		@flock($fp, lock_un);
	}
	else
	{
		if ($mode == 'r')
		{
			return @fread($fp, filesize($file));
		}
		@fwrite($fp, $data);
	}
	@fclose($fp);
}

/**
* get the users ip address.
* pulled from my {@link http://www.domainportfolio.us domain portfolio} project.
*
* @param  none
* @return string
*/
function get_ip()
{
	$ip = my_getenv('remote_addr');

	if (my_getenv('http_x_forwarded_for'))
	{
		if (preg_match_all('#\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}#s', my_getenv('http_x_forwarded_for'), $matches))
		{
			foreach ($matches[0] as $match)
			{
				if (!preg_match('#^(10|172\.16|192\.168)\.#', $match))
				{
					$ip = $match;
					break;
				}
			}
			unset($matches);
		}
	}
	else if (my_getenv('http_client_ip'))
	{
		$ip = my_getenv('http_client_ip');
	}
	else if (my_getenv('http_from'))
	{
		$ip = my_getenv('http_from');
	}
	return $ip;
}

/**
* returns an environment variable. based on pma_getenv from phpmyadmin.
*
* @param  string  variable name, eg: php_self
* @return string
*/
function my_getenv($varname)
{
	if (isset($_server[$varname]))
	{
		return $_server[$varname];
	}
	else if (isset($_env[$varname]))
	{
		return $_env[$varname];
	}
	else if (getenv($varname))
	{
		return getenv($varname);
	}
	return '';
}

// ######################## start main script #########################
// get current count
$count = fp(count_file, 'r');

// do we only want to count 'unique' visitors?
if (only_unique)
{
	// get visitor ip and check against our ip log
	$ip = get_ip();
	$ips = trim(fp(ip_file, 'r'));
	$ips = preg_split("#\n#", $ips, -1, preg_split_no_empty);
	$visited = (bool)(in_array($ip, $ips));

	// they've not visited before
	if (!$visited)
	{
		fp(ip_file, 'a', "$ip\n");
		fp(count_file, 'w', $count + 1);
	}
	// memory saving
	unset($ips);
}
else
{
	// no, we wish to count all visitors
	fp(count_file, 'w', $count + 1, use_flock);
}

// do we want to display the # visitors as graphics?
if (use_images)
{
	$count = preg_split("##", $count, -1, preg_split_no_empty);
	$len = count($count);
	$display = '';

	for ($i = 0; $i < $len; $i++)
	{
		$display .= '<img src="' . img_dir . $count[$i] . img_ext . '" border="0" alt="' . $count[$i] . '" />&nbsp;';
	}
	echo $display;
}
else
{
	// nope, let's just show it as plain text
	//echo $count;
}

?>