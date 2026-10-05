<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Folio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header class="site-header">
		<div class="site-header-container">
			<div class="site-header-left">
				<div class="site-header-left-container">
					<div class="menu">
						<a class="menu-container">
							<span class="menu-line"></span>
							<span class="menu-line"></span>
						</a>
					</div>
				</div>
			</div>
			<div class="site-header-middle">
				<div class="site-header-middle-container">
					<div class="sitename">
						<a href="#" class="sitename-container">
							<p class="sitename-text">Wandulu</p>
							<p class="sitename-text">Timothy</p>
						</a>
					</div>
				</div>
			</div>
			<div class="site-header-right">
				<div class="site-header-right-container">
					<div class="search">
						<a class="search-container">
							<span class="search-icon"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>