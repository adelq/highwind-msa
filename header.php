<?php
/**
 * The header template.
 * @package highwind
 * @since 1.0
 */
?>
<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?><?php highwind_html_before(); ?><!doctype html><!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>

	<?php highwind_head_top(); ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<!--  Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php highwind_head_bottom(); ?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php highwind_body_top(); ?>

<div class="outer-wrap" id="top">

	<div class="inner-wrap">

	<?php highwind_header_before(); ?>

	<?php /*<header class="header content-wrapper" role="banner" style="background-image:url(<?php echo header_image(); ?>);"> */?>
	<header class="header content-wrapper" role="banner" style="background: url(http://upennmsa.org/wp-content/uploads/2014/01/top_header4.jpg) top center no-repeat; min-height: 240px;">
		<?php highwind_header(); ?>

	</header>
	<div class="slider">
		<?php layerslider(7, 'homepage'); ?>
	</div>
	<div class="content-wrapper">

	<?php highwind_header_after(); ?>
