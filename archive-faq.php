<?php get_header(); ?>
<main class="main-content col-xs-12">
    <div class="breadcrum col-xs-12">
        <div class="container">
            <ul>
                <li>
                    <a href="<?php bloginfo('url'); ?>">
                        <i class="fa fa-home"></i>
                        home
                    </a>
                </li>
                <li>Trackings</li>
            </ul>
        </div>
    </div>
    <div class="case-s col-xs-12">
    	<div class="container">
	        <div class="g-body col-xs-12">
	        <?php
	        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

	        $args = array(
	            'post_type'       => 'faq',
	            'post_status'     => 'publish',
	            'posts_per_page'  => get_option('posts_per_page'),
	            'paged'           => $paged,
	            'orderby'         => 'date',
	            'order'           => 'DESC'
	        );
	        $posts = new WP_Query( $args );
	        ?>
	        <?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>
                <div class="item col-md-12">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><br>
                </div>
	        <?php endwhile;?>
	        </div>
	    </div>
	    <br>
	    <div class="pagination">
	        <?php    $args = array(
	               'format'             => '?paged=%#%',
	               'current'            => max( 1, get_query_var('paged') ),
	               'total'              => $posts->max_num_pages,
	               'show_all'           => false,
	               'end_size'           => 1,
	               'mid_size'           => 2,
	               'prev_next'          => false,
	               'type'               => 'list',
	              );
	        ?>
	        <?php echo paginate_links($args); ?>            
	    </div>
    </div>
    <?php wp_reset_query(); ?>
    <?php endif; ?> 
</main>
<?php get_footer(); ?>