<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrapper">
			<div class="site-info">
				Steven Cuff Construction | 16303 Stinson Cove Rd | Huntersville NC 28078 <br>
				p. 704.804.0530 | f. 1.866.909.0586 <br>
sitemap | site by <a href="https://bellaworksweb.com" target="_blank">Bellaworks</a>
			</div><!-- .site-info -->

			<div id="footer-icons">
				<?php the_field('footer_icons', 'option'); ?>
			</div>


	</div><!-- wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php 

wp_footer(); 

the_field('google_analytics', 'option');

?>

</body>
</html>
