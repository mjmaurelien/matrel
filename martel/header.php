<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon.png">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>
</div>
</div>
	<header id="masthead" class="site-header" role="banner">
		<div class="title-bar" data-responsive-toggle="site-navigation">
			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>
		</div>




			<div class="row">
				<div class="large-6 small-12 columns logo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/logohd.png" alt="" />
				</div>
				<div class="large-6 small-12 columns texte">
					<p>
						Equipements et systèmes pour la finition<br>et la présentation des documents
					</p>
				</div>

			</div>
	<div class="row menu">
		<div class="contain-to-grid">
			<nav class="top-bar" data-topbar role="navigation">
				<ul class="title-area">
					<li class="name">
						<h1><a href="#"><i class="fi-home"></i></a></h1>
					</li>
					 <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
					<li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
				</ul>

				<section class="top-bar-section">
					<!-- Right Nav Section -->
					<ul class="left">

						<li class="has-dropdown">
							<a href="#">produits</a>
							<ul class="dropdown">
								<li><a href="#">Thermo-relieurs système FastBack</a></li>
								<li><a href="#">Thermo-relieurs "dos carrés collés"</a></li>
								<li><a href="#">Perfo-relieur - Perforateur</a></li>
								<li><a href="#">Système de brochage numérique</a></li>
								<li><a href="#">Assembleuses - Taqueuses</a></li>
								<li><a href="#">Modules de brochage</a></li>
								<li><a href="#">Massicots</a></li>
								<li><a href="#">Pelliculeuse - Plastifieuse</a></li>
								<li><a href="#">Vernisseuses</a></li>
								<li><a href="#">Plieuses de table</a></li>
								<li><a href="#">Plieuse professionnelle</a></li>
								<li><a href="#">Raineuse/plieuse/perforation</a></li>
								<li><a href="#">Raineuses par emboutissage</a></li>
								<li><a href="#">Raineuses rotatives</a></li>
								<li><a href="#">Piqueuses - Agrafeuses</a></li>
								<li><a href="#">Foreuses</a></li>
								<li><a href="#">Margeurs</a></li>
								<li><a href="#">Compteuses de feuilles</a></li>
								<li><a href="#">Coupeuse de cartes</a></li>
								<li><a href="#">Perforateur</a></li>

							</ul>
						</li>
						<li><a href="#">qui sommes-nous</a></li>
						<li><a href="#">contact</a></li>
					</ul>
					<ul class="right">
						<li class="has-form">
							<div class="row collapse">
								<div class="large-8 small-9 columns">
									<input type="text" placeholder="Votre recherche">
								</div>
								<div class="large-4 small-3 columns">
									<a href="#" class="alert button expand">GO</a>
								</div>
							</div>
						</li>
					</ul>


					<!-- Left Nav Section -->

				</section>
			</nav>
		</div>
	</div>
	<div class="row colums">
		<div class="large-12">
				<nav class="top-bar" data-topbar role="navigation">
					<ul class="breadcrumbs">
						<li><a href="#">Accueil</a></li>
						<li><a href="#">Produits</a></li>
						<li class="disabled">Raineuse-Plieuse Touchline CF 375</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>


		<nav id="site-navigation" class=" top-bar" role="navigation">
			<div class="top-bar-left">
				<ul class=" menu">
					<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
					<li class="has-dropdown"><a href="#" >truc1</a>
						<ul class="dropdown">
							<li><a href="#" >Sous-truc1</a></li>
							<li><a href="#" >Sous-truc2</a></li>
							<li><a href="#" >Sous-truc3</a></li>
							<li><a href="#" >Sous-truc4</a></li>
						</ul>
					</li>
					<li ><a href="#" >truc2</a></li>
					<li ><a href="#" >truc3</a></li>
					<li ><a href="#" >truc4</a></li>
					<li ><a href="#" >truc5</a></li>
					<li ><a href="#" >truc6</a></li>
					<li ><a href="#" >truc7</a></li>
				</ul>
			</div>
			<div class="top-bar-right">
				<ul class="right">
					<li class="has-form">
						<div class="row collapse">
							<div class="large-8 small-9 columns">
								<input type="text" placeholder="Votre recherche">
							</div>
							<div class="large-4 small-3 columns">
								<a href="#" class="alert button expand">GO</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</nav>


	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
