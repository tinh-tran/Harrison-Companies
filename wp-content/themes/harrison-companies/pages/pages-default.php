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
/* This adds the fancy image to the top */


echo '<div class="g980" id="content">';
echo '<div class="g980 inside" id="top_img">';
global $wp_query;
$postid = $wp_query->post->ID;
		$upload_dir = wp_upload_dir(); 
		$img_src = $upload_dir['baseurl'] . "/";
		$img_src .= get_post_meta($postid, 'header', true);
echo "<img src='$img_src' alt='' />";
wp_reset_query();
echo "</div>";
echo '<div class="g630 in70" id="post">';
cfct_loop();
do_action('posts_logout_link');
echo '</div>';
get_sidebar();

echo '</div>';
get_footer();

?>