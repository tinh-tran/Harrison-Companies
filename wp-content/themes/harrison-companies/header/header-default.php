<?php

// This file is part of the Carrington JAM Theme for WordPress
// http://carringtontheme.com
//
// Copyright (c) 2008-2010 Crowd Favorite, Ltd. All rights reserved.
// http://crowdfavorite.com
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
// **********************************************************************

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">  
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/1000_14_20.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/harrisonco.css">
  <!-- end CSS-->

  <script src="<?php bloginfo('template_directory'); ?>/js/libs/modernizr-2.0.6.min.js"></script>
  <?php wp_head(); ?>
</head>

<body>
<div class="main clearfix">
	<div id="header" class="g980">
		<?php 
		wp_nav_menu( 	array( 
							'theme_location' => 'login-menu',
							'container_class' => 'g210 inside',
							'container_id' => 'login-nav'
							 ) 
		 ); 
		 ?>
		<div id="logo" class="g560">
			<img src="<?php bloginfo('template_directory'); ?>/img/hc-logo.png" alt="" />
		</div>
		<div class="g210">
			<p class="book-pass">
				Book your Empire Pass accomodations wth us!<br />
				<a href="http://EmpireLuxuryLodging.com">EmpireLuxuryLodging.com</a>
				888·983·6747
			</p>
		</div>
		<?php 
		wp_nav_menu( 	array( 
							'theme_location' => 'primary-menu',
							'container_class' => 'g980 inside',
							'container_id' => 'nav'
							 ) 
		 ); 
		 ?>
	</div>

	<div class="g980" id="exclusive"><img src="<?php bloginfo('template_directory'); ?>/img/exclusive.png" alt="" /></div>
