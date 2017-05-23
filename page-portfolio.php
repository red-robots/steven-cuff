<?php
/**
 * Template Name: Portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

			<?php
				$wp_query = new WP_Query();
				$wp_query->query(array(
				'post_type'=>'portfolio',
				'posts_per_page' => -1,
				'paged' => $paged,
			));
				if ($wp_query->have_posts()) : ?>
					<section class="page-container">
						<div id="container">
					    <?php while ($wp_query->have_posts()) :  $wp_query->the_post(); 

					    	$gallery = get_field('project_images');
					    	$titles = get_the_title();
					    	$sani = sanitize_title_with_dashes($titles);
					  
						?>

					    	<div class="item portfolio-box">
					    		<!-- print first image only -->
					    		<img src="<?php echo $gallery[0]['project_image1']['url']; ?>">
					    		<h2><?php the_title(); ?></h2>
					    		<a class="inline" href="#<?php echo $sani; ?>"></a>
					    	</div>

					    	<section class="boxes">
								<div style="display:none;">
									<div id="<?php echo $sani; ?>" class="opend">
									<?php if(have_rows('project_images')) : ?>
										<div class="flexslider">
											<ul class="slides">
											<?php while(have_rows('project_images')) : the_row(); 
												$image = get_sub_field('project_image1'); 
												$image = get_sub_field('project_image1'); 
												$image = get_sub_field('project_image1'); 
												$alt = $image['alt'];
												$size = 'large';
												$thumb = $image['sizes'][ $size ];
											?>
												<li>
													<div class="the-image">
														<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
														<div class="info">
															<h2><?php the_title(); ?></h2>
															<h3><?php the_sub_field('project_location'); ?></h3>
														</div>
													</div>
													
												</li>
											<?php endwhile; ?>
											</ul>
										</div>
									<?php endif; ?>
									</div>
								</div>
							</section>

							
						<?php endwhile; ?>
						</div>
					</section>

					
				<?php endif; 

				// echo '<pre>';
				// print_r($gallery);
				// echo '</pre>';
				?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
