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
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/icon.png" type="image/x-icon">
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

	<header id="masthead" class="row" role="banner">

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






<!-- test prof -->
<div class="row">
	<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="#">My Site</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li class="active"><a href="#">Right Button Active</a></li>
      <li class="has-dropdown">
        <a href="#">Right Button Dropdown</a>
        <ul class="dropdown">
          <li><a href="#">First link in dropdown</a></li>
          <li class="active"><a href="#">Active link in dropdown</a></li>
        </ul>
      </li>
    </ul>

    <!-- Left Nav Section -->
    <ul class="left">
      <li><a href="#">Left Nav Button</a></li>
    </ul>
  </section>
</nav>
</div>
<!-- end test prof -->







<div class="row menu">
    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="#"><i class="fa fa-home"></i></a></h1>
        </li>
         <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-top-bar menu-icon"><a href="#"><span></span></a></li>
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
<div class="row colums">
  <div class="large-12">
      <nav class="topbar" data-topbar role="navigation">
        <ul class="breadcrumbs">
          <li><a href="#">Accueil</a></li>
          <li><a href="#">Produits</a></li>
          <li class="disabled">Raineuse-Plieuse Touchline CF 375</li>
        </ul>
      </nav>
		</div>
	</div>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
