<?php
/**
 * Template Name: Blog
 *
 * @package WP Boilerplate
 * @subpackage wp-boilerplate
 * @since WP Boilerplate 1.0.1
 */
get_header();
?>

<?php include(TEMPLATEPATH . '/subhead.php'); ?>

<section class="hero">
  <div class="hero__content container">
    <h2 class="hero__heading">july 11-17, 2016</h2>
    <p>
      Want to take this year’s family vacation to a Whole ‘Notha Level?! Gear up for a week’s worth of Adventure—all leading up to our TWO Green Carpet events! Make this vacation an Adventure you’ll never forget—ONLY at It Works! Week!
    </p>
  </div>
</section>

<section class="blog container">
  <?php $queryBlog = new WP_Query(array( 'posts_per_page' => 5)); ?>
  <?php if ($queryBlog->have_posts()) : while ($queryBlog->have_posts()) : $queryBlog->the_post(); ?>
  <!-- START LOOP -->
  <div class="blog__post row">
    <div class="col col--md-4">
      <?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array(1200, 350) ); ?>
      <?php if ($thumbnail[0]) : ?>
      <a href="<?php echo get_permalink(); ?>">
        <img class="blog__img" src="<?php echo $thumbnail[0]; ?>" alt="<?php echo the_title(); ?>" />
      </a>
      <?php endif; ?>
    </div>
    <div class="col col--md-8">
      <div class="blog__header">
        <small>Posted by <?php the_author(); ?> | <?php the_time('F j, Y'); ?></small>
        <a class="blog__title" href="<?php echo the_permalink();?>"><?php the_title(); ?></a>
      </div>
      <div class="blog__excerpt">
        <?php the_excerpt(); ?>
      </div>
    </div>
  </div>
  <!-- END LOOP -->
<?php endwhile; endif; wp_reset_postdata(); ?>

</section>

<?php get_footer(); ?>
