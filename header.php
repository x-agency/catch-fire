<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/eyp1ftn.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>
<div 
<?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>>

<nav class="navbar fixed-top">

  	<div class="container-fluid">
		<a class="navbar-brand" href="/">
			<?php
				echo file_get_contents( get_theme_file_uri( '/img/header-icon.svg' ) );
			?>
			<div class="nav-text">catch<span>fire</span></div>
		</a>
		<div class="menu" data-bs-toggle="modal" data-bs-target="#menuModal">
			<div class="menu-title">menu</div>
			<div class="hamburger">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
    </div>
</nav>
<div id="content" class="site-content">
	<div class="ast-container">
		
