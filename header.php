<?php include_once('embeds/_globals.php');?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $site_name; ?></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

 <!--   ADD FAVICONS -->

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
