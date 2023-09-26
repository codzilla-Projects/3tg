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
                <li>
                    Search
                </li>
                <li><?php echo $_GET['s']; ?></li>
            </ul>
        </div>
    </div>
    <div class="plat-inner col-xs-12">
    	<div class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
            <?php endwhile; endif;?>
            <div class="pagination">
            <?php echo paginate_links(); ?>            
            </div>
    	</div>
    </div>
</main>
<?php get_footer(); ?>