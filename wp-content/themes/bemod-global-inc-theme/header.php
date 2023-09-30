<?php defined( 'ABSPATH' ) || exit;

/**
 *	THEME HEADER
 */

$isSingular	=	is_singular(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php prime2g_theme_html_classes(); ?>>

<?php do_action( 'prime2g_before_head' ); ?>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
        <!-- Meta Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1375383529721112');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1375383529721112&ev=PageView&noscript=1"/></noscript>
        <!-- End Meta Pixel Code -->
</head>

<?php do_action( 'prime2g_before_body' ); ?>

<body <?php body_class( 'body' ); ?>>

<?php wp_body_open(); ?>

<div id="container" class="site_container site_width prel">

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', PRIME2G_TEXTDOM ); ?></a>

	<?php get_template_part( 'parts/site-header' ); ?>

	<div id="contentWrap" class="contentWrap">

	<?php
	if ( 'header' != get_theme_mod( 'prime2g_title_location' ) ) {
		if ( $isSingular ) {
			if ( !function_exists( 'define_2gRMVTitle' ) ) {
				prime2g_title_header( prime2g_title_header_classes() );
			}
		}
		else {
			prime2g_title_header( prime2g_title_header_classes() );
		}
	}
	?>

	<div id="content" class="site_content grid site_width">

		<main id="main" class="site_main<?php if ( is_archive() ) echo ' grid'; ?>" role="main">

		<?php if ( $isSingular ) echo '<article id="primary" class="primary_area">'; ?>
