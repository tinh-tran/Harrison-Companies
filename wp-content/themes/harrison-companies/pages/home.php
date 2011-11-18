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
		$upload_dir = wp_upload_dir(); 
		$img_src = $upload_dir['baseurl'] . "/";
		$img_src .= get_post_meta($postid, 'header', true);
		echo "<img src='$img_src' alt='' />";
		wp_reset_query();
		?>
	</div>
	<div class="g980" id="pillow-placement">
		<img src="<?php bloginfo('template_directory'); ?>/img/pillow.png" alt="" />
	</div>
	<div class="g420 inside" id="units">
		<p>Empire Pass Properties under management: <a href="<?php bloginfo('url') ?>?page_id=46">Click here.</a></p>
		<a href="<?php bloginfo('url') ?>?page_id=46">
			<img src="<?php bloginfo('template_directory'); ?>/img/home-units.jpg" alt="" />
		</a>
		<br /><br />
	</div>
	<div class="g560 inside">
		<ul class="circle-nav">
			<li>
				<a href="<?php bloginfo('url') ?>?page_id=6">
					<img src="<?php bloginfo('template_directory'); ?>/img/home-prop-managment.jpg" alt="" />
				</a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>?page_id=8">
					<img src="<?php bloginfo('template_directory'); ?>/img/home-hoa-managment.jpg" alt="" />
				</a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>?page_id=10">
					<img src="<?php bloginfo('template_directory'); ?>/img/home-construction.jpg" alt="" />
				</a>
			</li>
		</ul>
	<?php cfct_loop(); ?>
	<div style="float:left; width:126px; margin-right:5px"><img src="<?php bloginfo('template_directory'); ?>/img/cam-weather.jpg" alt="" /></div>
	<div style="float:left: width:405px"><?php echo do_shortcode('[forecast]'); ?></div>
	</div>
</div>
<?php get_footer(); ?>