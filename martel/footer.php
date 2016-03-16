<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="footer-container">
			<footer class="footer">
				<div class="row full-width">
					<div class="large-12 large-offset-2 column video">
						<div class="large-4 columns">
						<ul>
							<li><a href="#">Accueil</a></li>
							<li><a href="#">Produits</a></li>
							<li><a href="#">Qui sommes-nous</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
					<div class="large-4 columns">

						<ul>
							<li><i class="fi-map"></i> MATREL - 129, rue des marronniers - BP 50464 - 38304 Bourgoin-Jallieu Cedex Cedex</li>
							<li><i class="fi-telephone"></i> Tél : 04 74 93 42 42</li>
							<li><i class="fi-telephone"></i> Fax : 04 74 93 44 88</li>
						</ul>
					</div>
					<div class="large-1 columns"></div>
				</div>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
