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

get_header();
?>

<div class="g980" id="content">
	<div class="g980 inside" id="top_img">
		<?php  
		/* This adds the fancy image to the top */
		global $wp_query;
		$postid = $wp_query->post->ID;
		$img_src = get_post_meta($postid, 'header', true);
		echo "<img src='$img_src' alt='' />";
		wp_reset_query();
		?>
	</div>
	<div class="g980" id="pillow-placement">
		<img src="<?php bloginfo('template_directory'); ?>/img/pillow.png" alt="" />
	</div>
	<div class="g420 inside" id="units">
		<p>Empire Pass Properties under management: <a href="http://localhost/~neal/harrisoncompanies/?page_id=46">Click here.</a></p>
		<a href="http://localhost/~neal/harrisoncompanies/?page_id=46">
			<img src="<?php bloginfo('template_directory'); ?>/img/home-units.jpg" alt="" />
		</a>
		<br /><br />
	</div>
	<div class="g560 inside">
		<ul class="circle-nav">
			<li>
				<a href="http://localhost/~neal/harrisoncompanies/?page_id=6">
					<img src="<?php bloginfo('template_directory'); ?>/img/home-prop-managment.jpg" alt="" />
				</a>
			</li>
			<li>
				<a href="http://localhost/~neal/harrisoncompanies/?page_id=8">
					<img src="<?php bloginfo('template_directory'); ?>/img/home-hoa-managment.jpg" alt="" />
				</a>
			</li>
			<li>
				<a href="http://localhost/~neal/harrisoncompanies/?page_id=10">
					<img src="<?php bloginfo('template_directory'); ?>/img/home-construction.jpg" alt="" />
				</a>
			</li>
		</ul>
	<?php cfct_loop(); ?>
	</div>
</div>
<?php get_footer(); ?>