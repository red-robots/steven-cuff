<?php

/**

 * Displays a Single Post

 */

 ?>

<!DOCTYPE html>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="viewport" content="width=device-width" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />



<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/colorbox.css" />




<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>



<?php wp_head(); ?>













<?php the_field('google_analytics', 'option'); ?>



</head>



<body style="background-color: #ffffff;">



<div style="width: 90%; height: auto; margin-left: auto; margin-right: auto; position: relative;">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>




<div style="height: 40px;"></div>









<!-- Slider -->
    
 <div class="thumbslider">  
<section class="slider">
        <div id="slider" class="flexslider">
          
          <ul class="slides">
           
  	    	    
<?php if(get_field('project_images')): ?>          
        <?php while(has_sub_field('project_images')): ?>
        <?php 
              // get the image field
                $image = get_sub_field('project_image1'); 
                $url = $image['url'];
                $alt = $image['alt'];
             
                // size of the image
                $size = 'portfolioimage'; // the size you set in the functions file
                $thumb = $image['sizes'][ $size ];
        if( !empty($image) ): ?>
         <li>
         
<div class="slideimage"><div class="slideimage-content">

<table><tr><td>
<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
<div style="text-align: left; margin-top: 20px;"><h1 style="margin-bottom: 0px; text-transform: capitalize;"><?php the_title(); ?></h1>
<h2><?php the_field("project_location"); ?></h2></div>
</td></tr></table>


</div></div></li>
        <?php endif; ?>
        
        <?php endwhile; endif; // end repeater ?>

  	    	
          </ul>
          
        </div>
        
      </section>
      
 </div>     
        </div><!-- slider -->









<?php endwhile; endif; ?>

</div>





</body>

</html>