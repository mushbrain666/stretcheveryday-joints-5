<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>

		<meta charset="utf-8">

		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">

		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

    <!-- from previous version -->
    <meta name="google-site-verification" content="q2ZeZO-Coe6nG1ydAKJw71a0uA2JfI993q7vRiKEDio" />

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-60244759-1', 'auto');
      ga('send', 'pageview');
    </script>

    <meta property="og:title" content="Stretch Every Day - Yoga for Everyone"/>
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/stretcheveryday-og-image.jpg">
    <meta property="og:site_name" content="Stretch Every Day">
    <meta property="og:description" content="Exploring and sharing Yoga with love.">

	</head>

	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">

			<!-- Load off-canvas container. Feel free to remove if not using. -->
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>

			<div class="off-canvas-content" data-off-canvas-content>

        <div class="header-wrapper">
				<header class="header" role="banner">

          <div class="top-bar" id="main-menu">

           <div class="top-bar-left">

             <ul class="medium-horizontal menu">
               <li><object id="infinity-logo" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/stretcheveryday-infinity-logo.svg"></object></li>
               <li><h1 class="site-name"><a href="<?php echo home_url() ?>">Stretch Every Day</a></h1></li>
             </ul>

           </div><!--/top-bar-left-->

           <div class="top-bar-right">

             <ul class="medium-horizontal dropdown menu main-nav" data-dropdown-menu>

               <li>
                 <a href="#">Practice</a>
                 <ul class="menu">
                   <li><a href="<?php echo home_url() ?>/poses">Poses</a></li>
                   <li><a href="<?php echo home_url() ?>/yoga-sequences">Sequences</a></li>
                   <li><a href="<?php echo home_url() ?>/yoga-classes">Classes</a></li>
                   <li><a href="<?php echo home_url() ?>/yoga-articles">Articles</a></li>
                 </ul>
               </li>

               <li>
                 <a href="#">Schedule</a>
                 <ul class="menu">
                   <li><a href="<?php echo home_url() ?>/events/costa-rica-yoga-and-wellness-retreat">Costa Rica 2019</a></li>
                 </ul>
               </li>

               <li><a href="<?php echo home_url() ?>/sarah">Sarah</a></li>

             </ul>

           </div><!--/top-bar-right-->

          </div><!--/top-bar-->

				</header> <!-- end .header -->
        </div>
        <div class="newsletter-wrapper">
          <div class="newsletter-callout">
            <h3>Sign up for our Newsletter and receive a free e-book!</h3>
          </div>
        </div>
