<?php include_once('embeds/_globals.php');?>

<!DOCTYPE html>

<html lang="en">

<head>

    <title><?php echo $site_name; ?></title>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="***UPDATE***" />
    <meta name="keywords" content="***UPDATE***" />
    <meta name="author" content="***UPDATE***" />

    <!-- OPEN GRAPH -->
    <meta property="og:type" content="business.business">
    <meta property="og:title" content="***UPDATE***">
    <meta property="og:url" content="***UPDATE***">
    <meta property="og:image" content="/dist/img/opengraph.png">

    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="152x152" href="/dist/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/dist/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/dist/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/dist/favicons/manifest.json">
    <link rel="mask-icon" href="/dist/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/dist/favicons/favicon.ico">
    <meta name="msapplication-config" content="/dist/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

<link rel="stylesheet" href="<?php echo $site_url; ?>dist/css/style.min.css">


</head>

<body id="top">

<header class="header">

    <div class="header-wrapper group">
	<a class="logo-wrapper" href="<?php echo $site_url; ?>">
        <img src="/dist/img/generic-logo.png" alt="Company Name">
    </a>

	<nav class="nav">
		<p class="menu-link nav-toggle"><a></a></p>
			<ul>
                <li <?php if ($segment_1 == 'styleguide.php') { ?> class="current-nav"<?php } ?>><a href="<?php echo $site_url; ?>styleguide.php">Styleguide</a></li>
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
