<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mi_tema
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mitema' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( '&#169;' . ' 2019 - Desarrollado por %s', 'mitema' ), 'Paco Silva' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Nombre del Tema: %1$s', 'mitema' ), 'Base limpia para desarrollo', '<a href="http://underscores.me/"></a>' );
				?>
		</div><!-- .site-info -->
		<div class="menu-footer-container">
			<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'footer-menu',
					) );
			?>
		</div><!-- .menu-footer-container -->
		</div><!-- .footer -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
