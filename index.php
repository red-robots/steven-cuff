<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>
	<div id="primary" class="content-area-full">
		

			<?php 
			// Query the Post type Slides
			$querySlides = array(
				'post_type' => 'slides',
				'posts_per_page' => '-1'
			);
			// The Query
			$the_query = new WP_Query( $querySlides );

				// The Loop
				 if ( $the_query->have_posts()) : ?>
					<div class="flexslider">
						<ul class="slides">
							<?php while ( $the_query->have_posts() ) : ?>
							<?php $the_query->the_post(); ?>
								<li> 
									<div class="slide-image">
										<?php 
										$image = get_field('slide_image');
										if( !empty($image) ): ?>
										    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> 
										<?php endif; ?>
									</div>           
								</li>
							 <?php endwhile; ?>
						</ul><!-- slides -->
					</div><!-- .flexslider -->
				<?php endif; // end loop ?>
			<?php wp_reset_postdata(); ?>

		
	</div><!-- #primary -->
<?php
get_footer();
