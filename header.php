<? /* Globals for rapid prototyping - Remove in build */ include_once('embeds/_globals.php'); ?>

<!doctype html>

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]> <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]> <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>

  <base href="Front End Boilerplate">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <title><?php echo $site_name; ?></title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />

  <link rel="shortcut icon" href="<?php echo $site_url; ?>favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo $$site_url; ?>apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $site_url; ?>apple-touch-icon-ipad.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $site_url; ?>apple-touch-icon-iphone4.png">

  <link rel="stylesheet" href="<?php echo $site_url; ?>assets/build/style.css">

  <link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


</head>

<body id="top">

<header class="header">

<div class="header-wrapper group">
	<a class="logo-wrapper" href="<?php echo $site_url; ?>">
<img class="header-logo" src="" alt="site title">
  </a>

	<nav class="nav" id="primary-nav">
		<p class="menu-link nav-toggle">
			<a>Open Navigation</a>
		</p>
			<ul>
				<li <?php if ($segment_1 == '') { ?> class="current-nav"<?php } ?>><a href="<?php echo $site_url; ?>">Home</a></li>
        <li <?php if ($segment_1 == 'styleguide.php') { ?> class="current-nav"<?php } ?>><a href="<?php echo $site_url; ?>styleguide.php">Styleguide</a></li>

				<li <?php if ($segment_1 == 'resources-listing.php' || $segment_1 == 'resources-single.php') { ?> class="current-nav"<?php } ?>><a href="<?php echo $site_url; ?>resources-listing.php">Resources</a>
					<ul>
						<li><a href="<?php echo $site_url; ?>resources-listing.php">Subitem One</a></li>
						<li><a href="<?php echo $site_url; ?>resources-listing.php">Subitem Two</a></li>
						<li><a href="<?php echo $site_url; ?>resources-listing.php">Subitem Three</a></li>
					</ul>
				</li>
				<li <?php if ($segment_1 == 'events-listing.php' || $segment_1 == 'events-calendar.php') { ?> class="current-nav"<?php } ?>><a href="<?php echo $site_url; ?>events-calendar.php">Events</a>
					<ul>
            <li><a href="<?php echo $site_url; ?>events-calendar.php">Events Calendar</a></li>
						<li><a href="<?php echo $site_url; ?>events-listing.php">Events Listing</a></li>
					</ul>
				</li>
				<li <?php if ($segment_1 == 'news-listing.php' || $segment_1 == 'news-single.php') { ?> class="current-nav"<?php } ?>><a href="<?php echo $site_url; ?>news-listing.php">News</a></li>

				<li <?php if ($segment_1 == 'contact.php' || $segment_1 == 'contact-success.php') { ?> class="current-nav"<?php } ?>><a href="<?php echo $site_url; ?>contact.php">Contact</a></li>
			</ul>
		</nav>


</div> <!--/ header-wrapper group-->
</header> <!--/ header-->
