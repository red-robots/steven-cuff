<?php
/**
 * Template Name: News
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

			
			<?php
				$wp_query = new WP_Query();
				$wp_query->query(array(
				'post_type'=>'post',
				'posts_per_page' => 10,
				'paged' => $paged,
			));
				if ($wp_query->have_posts()) : ?>
					<section class="page-container">
				    <?php while ($wp_query->have_posts()) : ?>
				    <?php $wp_query->the_post(); ?>

				    	<?php get_template_part( 'template-parts/content', 'post' ); ?>

					<?php endwhile; ?>
					</section>
				<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
