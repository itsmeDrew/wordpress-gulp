<?php
/**
 *
 * @package WP Boilerplate
 * @subpackage wp-boilerplate
 * @since WP Boilerplate 1.0.1
 */
get_header();
?>

<?php include(TEMPLATEPATH . '/subhead.php'); ?>

<div class="error">
  <div class="container">
    <div class="error-content row">
      <div class="error-message col-md-6">
        <div class="error-header">
          <h1 class="error-header__heading--large"><?php _e( 'Oops!' ); ?></h1>
          <p class="error-header__message">
            We can’t seem to find the page you’re looking for.
          </p>
        </div>
        <a class="error__btn btn-secondary" href="<?php echo esc_url( home_url('/') ); ?>">go to homepage</a>
        <a class="error__btn btn-primary" href="<?php echo get_permalink(get_page_by_path('Contact')); ?>">contact support</a>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
