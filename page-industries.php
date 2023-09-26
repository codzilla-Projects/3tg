<?php 
/**
** Template Name: Industries Template
**/
get_header(); 
?>
<main class="main-content col-xs-12">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="about-hero platform indust col-xs-12">
        <div class="ab-img col-md-6 col-xs-12" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500">
            <?php the_post_thumbnail('large'); ?>
        </div>
        <div class="ab-data col-md-6 col-xs-12" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="700">
        	<?php the_content(); ?>
        </div>
    </div>
    <?php endwhile; endif;?>

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
                    <a href="#">Solutions</a>
                </li>
                <li>industries</li>
            </ul>
        </div>
    </div>
    <div class="plat-inner col-xs-12">
        <div class="container">
            <div class="pl-img col-md-6 col-xs-12" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
            	<?= sh_get_img(get_option('sh_ind_first_img'),get_option('sh_ind_first_img_id'),''); ?>
            </div>
            <div class="pl-data col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
            	<?php echo get_option('sh_ind_first_content'); ?>
            </div>
        </div>
    </div>
    <div class="plat-inner col-xs-12">
        <div class="container">
            <div class="pl-img col-md-6 col-xs-12" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="400">
            	<?= sh_get_img(get_option('sh_ind_second_img'),get_option('sh_ind_second_img_id'),''); ?>
            </div>
            <div class="pl-data col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
            	<?php echo get_option('sh_ind_second_content'); ?>
            </div>
        </div>
    </div>
    <div class="plat-inner col-xs-12">
        <div class="container">
            <div class="pl-img col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            	<?= sh_get_img(get_option('sh_ind_third_img'),get_option('sh_ind_third_img_id'),''); ?>
            </div>
            <div class="pl-data col-md-6 col-xs-12" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="400">
            	<?php echo get_option('sh_ind_third_content'); ?>
            </div>
        </div>
    </div>
    <div class="plat-inner col-xs-12">
        <div class="container">
            <div class="pl-img col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            	<?= sh_get_img(get_option('sh_ind_fourth_img'),get_option('sh_ind_fourth_img_id'),''); ?>
            </div>
            <div class="pl-data col-md-6 col-xs-12" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="400">
            	<?php echo get_option('sh_ind_fourth_content'); ?>
            </div>
        </div>
    </div>
    <div class="plat-inner col-xs-12">
        <div class="container">
            <div class="pl-img col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            	<?= sh_get_img(get_option('sh_ind_fifth_img'),get_option('sh_ind_fifth_img_id'),''); ?>
            </div>
            <div class="pl-data col-md-6 col-xs-12" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="400">
            	<?php echo get_option('sh_ind_fifth_content'); ?>
            </div>
        </div>
    </div>
    <div class="plat-inner lasty col-xs-12">
        <div class="container">
            <div class="pl-img col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            	<?= sh_get_img(get_option('sh_ind_sixth_img'),get_option('sh_ind_sixth_img_id'),''); ?>
            </div>
            <div class="pl-data col-md-6 col-xs-12" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="400">
            	<?php echo get_option('sh_ind_sixth_content'); ?>
            </div>
        </div>
    </div>
    <div class="partner-s col-xs-12">
        <div class="container">
            <div class="g-head col-xs-12">
            <h3><?php echo get_option('sh_ind_seventh_title'); ?></h3>
            </div>
            <div class="g-body col-xs-12">
                <div class="part-slider owl-carousel owl-theme">
                <?php
                $partners = sh_get_partners(-1);
                if($partners->have_posts()) : 
                ?>
                <?php while($partners->have_posts()) : $partners->the_post(); ?>
                    <div class="item">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                <?php endwhile;?>
                <?php wp_reset_query(); ?>
                <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>