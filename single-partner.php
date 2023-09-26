<?php get_header(); ?>
<main class="main-content col-xs-12">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
                    <a href="<?php bloginfo('url'); ?>/partner">Partners</a>
                </li>
                <li><?php the_title(); ?></li>
            </ul>
        </div>
    </div>
    <div class="plat-inner col-xs-12">
    	<div class="container">
			<?php the_content(); ?>
    	</div>
    </div>
    <?php endwhile; endif;?>
</main>
<?php get_footer(); ?>