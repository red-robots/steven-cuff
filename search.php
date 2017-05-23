<?php
/**
* Search Page
*/

get_header(); ?> 

	<div id="main">

<div class="page-content">


<!-- -->
	
<h1>Search Results</h1>

<!-- news box -->

<!-- / news box -->

<?php
	/* Start the Loop 
	
		Number of posts on a category page, 
		before it paginates, will be determined 
		by the WordPress Admin in Settings > Reading
	
	*/
	
	while ( have_posts() ) : the_post(); ?>
    
    <div class="post">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
    </div><!-- post -->
    

<?php endwhile;?>

    <div class="clear"></div>
    <?php pagi_posts_nav(); ?>
    






	</div><!-- #content -->
</div><!-- #container -->

<?php get_footer(); ?>