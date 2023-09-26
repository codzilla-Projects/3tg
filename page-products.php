<?php 
/**
** Template Name: Products Template
**/
get_header(); 
?>
<main class="main-content col-xs-12">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="about-hero platform prods col-xs-12">
        <div class="ab-img col-md-6 col-xs-12">
            <?php the_post_thumbnail('full'); ?>
        </div>
        <div class="ab-data col-md-6 col-xs-12">
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
                <li><?php the_title(); ?></li>
            </ul>
        </div>
    </div>
    <div class="plat-inner col-xs-12">
        <div class="container">
            <div class="pl-img col-md-6 col-xs-12">
                <?= sh_get_img(get_option('sh_pro_first_img'),get_option('sh_pro_first_img_id'),''); ?>
            </div>
            <div class="pl-data col-md-6 col-xs-12">
                <?php echo wpautop(get_option('sh_pro_first_content')); ?>
            </div>
        </div>
    </div>
    <div class="plat-inner col-xs-12">
        <div class="container">
            <div class="pl-img col-md-6 col-xs-12">
                <?= sh_get_img(get_option('sh_pro_second_img'),get_option('sh_pro_second_img_id'),''); ?>
            </div>
            <div class="pl-data col-md-6 col-xs-12">
                <?php echo wpautop(get_option('sh_pro_second_content')); ?>
            </div>
        </div>
    </div>
    <div class="plat-inner col-xs-12">
        <div class="container">
            <div class="pl-img col-md-6 col-xs-12">
                <?= sh_get_img(get_option('sh_pro_third_img'),get_option('sh_pro_third_img_id'),''); ?>
            </div>
            <div class="pl-data col-md-6 col-xs-12">
                <?php echo wpautop(get_option('sh_pro_third_content')); ?>
            </div>
        </div>
    </div>
    <div class="plat-inner col-xs-12">
        <div class="container">
            <div class="pl-img col-md-6 col-xs-12">
                <?= sh_get_img(get_option('sh_pro_fourth_img'),get_option('sh_pro_fourth_img_id'),''); ?>
            </div>
            <div class="pl-data col-md-6 col-xs-12">
                <?php echo wpautop(get_option('sh_pro_fourth_content')); ?>
            </div>
        </div>
    </div>
    <div class="case-s col-xs-12">
        <div class="container">
            <div class="g-head col-xs-12">
            <h3><?php echo get_option('sh_pro_fifth_title'); ?></h3>
            <?php echo wpautop(get_option('sh_pro_fifth_content')); ?>
        </div>
        <div class="g-body col-xs-12">
            <div class="case-slider owl-carousel owl-theme">
                <?php
                $cases = sh_get_cases(9);
                if($cases->have_posts()) : 
                ?>
                <?php while($cases->have_posts()) : $cases->the_post(); ?>
                <div class="item">
                    <div class="inner">
                        <div class="i-img">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                        <div class="i-data">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
                <?php wp_reset_query(); ?>
                <?php endif ?>                
            </div>    
        </div>
            <div class="g-more col-xs-12">
                <a href="<?php echo get_option('sh_pro_fifth_btn_link'); ?>" class="btn"><?php echo get_option('sh_pro_fifth_btn_text'); ?></a>
            </div>
        </div>
    </div>
    <div class="partner-s col-xs-12">
        <div class="container">
            <div class="g-head col-xs-12">
            <h3><?php echo get_option('sh_pro_sixth_title'); ?></h3>
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