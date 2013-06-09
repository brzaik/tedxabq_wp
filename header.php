<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php if (is_front_page() ) { echo "TEDxABQ"; } else { the_title(); echo " - TEDxABQ"; } ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="description" content="TEDxABQ, an individually organized TED event in Albuquerque, New Mexico." />

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/jquery.countdown.css">
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/libs/jquery.countdown.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				var newYear = new Date(); 
				newYear = new Date(2013,09,07); 
				$('#defaultCountdown').countdown({until: newYear, format: 'YOWDHMS', significant: 3}); 
			});
		</script>

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div class="wrap clearfix">
					<div class="sixcol first">
						<nav class="global-nav-cont" role="navigation">
							<?php bones_community_nav(); ?>
						</nav>
					</div>
					<div class="sixcol">
						<nav class="global-nav-cont" role="navigation">
							<?php bones_global_nav(); ?>
						</nav>
					</div>
				</div>

				<br />
				
				<div id="inner-header" class="wrap clearfix">

					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
					<div class="clearfix">
						<div class="sixcol first">
							<p id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/library/images/tedxabq_mainlogo.png" /></a></p>
						</div>
						<div class="fp-countdown sixcol clearfix" style="margin-top: 28px; margin-bottom: 24px;">
							<div id="defaultCountdown"></div>
							<div class="countdown-text" style="float: left;">
								<p>UNTIL TEDxABQ</p>
								<p class="date-line">9.7.2013</p>
								<p style="letter-spacing: 0.09em;">POPEJOY HALL</p>
							</div>
						</div>
					</div>

					<!-- if you'd like to use the site description you can un-comment it below -->
					<?php // bloginfo('description'); ?>

				</div> <!-- end #inner-header -->

			</header> <!-- end header -->
