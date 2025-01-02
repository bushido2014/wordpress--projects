<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package finsweetwp
 */

get_header();
?>
<section class="single-post">
<div class="container">
<h2><?php the_title();?></h2>
<?php   finsweetwp_post_thumbnail(); ?>
<?php the_content();?>
</div>
</section>
<?php

get_footer();