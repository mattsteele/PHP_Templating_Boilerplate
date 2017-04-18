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


// EE-like segment variables
// ex: if ($segment_1 == '') {
// Provides 3 segment variables

$uri = $_SERVER['REQUEST_URI'];
$uri_array = explode("/",$uri);
	if ($subsubdir != ''){
		$segment_1 = $uri_array[3];
		$segment_2 = $uri_array[4];
		$segment_3 = $uri_array[5];
	} elseif ($subdir != '/') {
		$segment_1 = $uri_array[2];
		$segment_2 = $uri_array[3];
		$segment_3 = $uri_array[4];
	} else {
		$segment_1 = $uri_array[1];
		// $segment_2 = $uri_array[1];
		// $segment_3 = $uri_array[2];
	}
?>
