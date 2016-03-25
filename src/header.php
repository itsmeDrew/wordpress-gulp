<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title( '-', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header class="site-header">
    <div class="site-header__brand">
      <a href="<?php echo esc_url( home_url('/') ); ?>">
        <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="logo">
      </a>
    </div>
    <nav class="js-nav site-nav">
      <?php $navItems = array(
        'depth'        => 2,
        'post_status'  => 'publish',
        'sort_column'  => 'menu_order',
        'title_li'     => ''
      ); ?>
      <?php wp_list_pages($navItems); ?>
    </nav>
    <a class="js-hamburger site-nav__hamburger hidden--lg"><span></span></a>
  </header>
