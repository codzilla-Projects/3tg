<?php 
/**
** Template Name: Service1 Template
**/
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   
<div role="main" class="main">
				
   <?php
     the_content();
    ?>
			</div>

<?php endwhile; endif;?>

<?php get_footer(); ?>
