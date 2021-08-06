<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RadHat
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="wrap">
<header class="header">
  <div class="container">
    <div class="header__inner">
      <div class="header__logo"><img src="<?php the_field('header_logo', 'options'); ?>" alt="RedHat"></div>
      <div class="header__desc"><?php the_field('header_descr', 'options'); ?></div><a class="header__phone-mobile" href="tel:<?php the_field('header_tel', 'options'); ?>"></a>
      <div class="header__burger"></div>
      <div class="header__sidebar">
        <div class="header__sidebar-close"></div><a class="header__phone" href="tel:<?php the_field('header_tel', 'options'); ?>"><span class="header__phone-icon"></span><span class="header__phone-number"><?php the_field('header_tel', 'options'); ?></span></a><a class="btn btn_light header__btn" href="#"><span>Заказать звонок</span></a>
      </div>
    </div>
  </div>
</header>
