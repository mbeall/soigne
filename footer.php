<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Soigne
 * @since Soigné 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				&copy;2011 Design Elements by <a href="http://www.starverte.com">Star Verte LLC</a>.<br />
				&copy;2011 Banner Graphic designed by <a href="http://www.starverte.com">Star Verte LLC</a>. Used with permission. Not to be reproduced.<br />
				&copy;<?php echo date("Y"); ?> Content by <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><br />
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>