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
 
    <div class="prods-s col-xs-12">
        <div class="g-body col-xs-12">
        <?php
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

        $args = array(
            'post_type'       => 'product',
            'post_status'     => 'publish',
            'posts_per_page'  => get_option('posts_per_page'),
            'paged'           => $paged,
            'orderby'         => 'date',
            'order'           => 'DESC'
        );
        $posts = new WP_Query( $args );
        ?>
        <?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>
            <div class="block col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                <div class="inner">
                    <?php the_post_thumbnail('full'); ?>
                    <h3><?php the_title();  ?></h3>
                    <?php the_content(); ?>
                </div>
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
    <?php wp_reset_query(); ?>
    <?php endif; ?> 
</main>
<?php get_footer(); ?>