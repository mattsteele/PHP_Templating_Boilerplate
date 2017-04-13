<?php

/* Globals for rapid prototyping ( ex: echo $site_name; )
   Called in header.php to init variables across files
   ** Remove include in header in build **
--------------------------------------------------------------------*/

// Globals

$site_name = 'PHP Boilerplate'; // Site Name

$subdir = '/'; // If in a subdirectory, add it here ( ie: /project/ )
$subsubdir = ''; // If in a sub sub directory, add it here but do not include a slash at the front ( ie: something/ )
$site_url = 'http://'.$_SERVER['HTTP_HOST'].$subdir.$subsubdir; // Compiled Base URL


$uri_array = explode("/", $site_url);
	if ($subsubdir != ''){
		$segment_1 = $site_url[3];
		$segment_2 = $site_url[4];
		$segment_3 = $site_url[5];
	} elseif ($subdir != '/') {
		$segment_1 = $site_url[2];
		$segment_2 = $site_url[3];
		$segment_3 = $site_url[4];
	} else {
		$segment_1 = $site_url[1];
		$segment_2 = $site_url[2];
		$segment_3 = $site_url[3];
	}
?>
