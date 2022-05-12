<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thrive-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

?>
<!doctype html>
<html <?php language_attributes(); ?><?php thrive_html_class(); ?>>
<head>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="ahrefs-site-verification" content="e0709f03885585c82c77b16e9d79fa23c08d4c1ba9f902df5e7c83173791c213">
	<?php wp_head(); ?>
	<?php thrive_amp_permalink(); ?>
    <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1360586144036601');
  fbq('track', 'PageView');
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<!-- End Facebook Pixel Code -->
	<noframes>Sorry, your browser doesn’t support frames. </noframes>
</head>

<body <?php body_class( '' ); ?> data-spy="scroll" data-target="#scroll-menu" data-offset="50" id="top">
	<noscript>
  <img height="1" width="1" style="display:none" 
       src="https://www.facebook.com/tr?id=1360586144036601&ev=PageView&noscript=1"/>
</noscript>