<?php
/**
 * Template Name: Internal
 *
 * @package WP Boilerplate
 * @subpackage wp-boilerplate
 * @since WP Boilerplate 1.0.1
 */
get_header();
?>

<?php include(TEMPLATEPATH . '/subhead.php'); ?>

<div class="internal container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; endif; wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>
