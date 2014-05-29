<?php

/* Called in index.php to auto generate list of prototype files
--------------------------------------------------------------------*/

// set denied array for files list - add files here you dont want to show
$denied = array(
	'.',
	'..',
	'.htaccess',
	'.DS_Store',
	'.htaccess',
	'htaccess',
	'htaccess.txt',
	'readme.txt',
	'prototypes_log.txt',
	'favicon.ico',
	'favicon.png',
	'apple-touch-icon-ipad.png',
	'apple-touch-icon-iphone4.png',
	'apple-touch-icon.png',
	'a',
	'images',
	'includes',
	'embeds',
	'index.php',
	'_elements.php',
	'header.php',
	'.header.php',
	'footer.php',
	'.footer.php',
	'head.php',
	'foot.php'
); 

// generate list of files not in denied array
if ($handle = opendir('.')) {		    
    while (false !== ($file = readdir($handle)))
    {
        if (! in_array($file, $denied))
        {
            $thelist .= '<li><a href="'.$site_url.$file.'">'.ucwords(str_replace('_',' ',basename($file,'.php'))).'</a>';
        }
    }
    closedir($handle);
}
?>

<ul<?php if (isset($ul_class)) { echo' class="'.$ul_class.'"';} ?>>
	<? echo $thelist; ?>
</ul>		
		
