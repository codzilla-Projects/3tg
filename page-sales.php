<?php 
/**
** Template Name: Sales Template
**/
get_header(); 
?>
<main class="main-content col-xs-12">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="about-hero platform sales col-xs-12">
        <div class="ab-img col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <?php the_post_thumbnail('full'); ?>
        </div>
        <div class="ab-data col-md-6 col-xs-12" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200">
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
                <li>sales</li>
            </ul>
        </div>
    </div>
    <div class="resou-s col-xs-12">
        <div class="container">
            <div class="g-head col-xs-12">
            <h3><?php echo get_option('sh_sale_first_title'); ?></h3>
            </div>
            <div class="g-body col-xs-12">
                <?php
                $trackings = sh_get_all_trackings();
                if($trackings->have_posts()) : while($trackings->have_posts()): $trackings->the_post();
                    $id=get_the_ID();
                ?>
                <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="inner">
                        <div class="i-top">
                            <div class="i-img">
                                <img src="<?php echo get_post_meta($id,'sh_sales_img',true);?>" alt="">
                            </div>
                            <h3><?php the_title(); ?></h3>
                        </div>
                        <div class="i-mid">
                            <ul>
                                <?php for($i=1;$i<=10;$i++) {
                                $feature = get_post_meta($id,'sh_feature'.$i,true); 
                                if($feature != null){
                                ?>
                                <li><?= $feature; ?></li>
                                <?php } }?>
                            </ul>
                        </div>
                        <div class="i-footer">
                            <a href="tel:<?= get_post_meta($id,'sh_btn_val',true);?>" class="btn"><?= get_post_meta($id,'sh_btn_text',true);?></a>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
                <?php wp_reset_query(); ?>
                <?php endif ?>
            </div>
        </div>
    </div>
    <div class="partner-s col-xs-12">
        <div class="container">
            <div class="g-head col-xs-12">
            <h3><?php echo get_option('sh_sale_second_title'); ?></h3>
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
    <div class="testo col-xs-12">
        <div class="container">
            <div class="testo-slider owl-carousel owl-theme">
                <?php
                $testimonials = sh_get_testimonials(-1);
                if($testimonials->have_posts()) : 
                ?>
                <?php while($testimonials->have_posts()) : $testimonials->the_post(); ?>
                <div class="item">
                    <div class="i-img">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                    <?php the_content(); ?>
                    <h3><?php the_title(); ?></h3>
                    <span><?php the_excerpt(); ?></span>
                </div>
                <?php endwhile;?>
                <?php wp_reset_query(); ?>
                <?php endif ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>