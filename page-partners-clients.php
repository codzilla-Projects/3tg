<?php 
/**
** Template Name: Clients Template
**/
get_header(); 
?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main class="main-content col-xs-12">
        <div class="clients-overview col-xs-12">
            <div class="cl-img col-md-6 col-xs-12" style="background-image: url(<?= get_the_post_thumbnail_url(get_the_ID(),'full'); ?>)"></div>
            <div class="cl-data col-md-6 col-xs-12">
                <h3 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div>
        </div>
        <div class="partners col-xs-12">
            <div class="container">
                <div class="g-head col-xs-12">
                    <h3 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?= get_option('sh_part_first_title'); ?></h3>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"><?= get_option('sh_part_first_content'); ?></p>
                </div>
                <div class="g-body col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <?php
                $partners = sh_get_partners(-1);
                if($partners->have_posts()) : 
                ?>
                <div class="part-slider owl-carousel">
                    <?php while($partners->have_posts()) : $partners->the_post(); ?>
                    <div class="item">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                    <?php endwhile;?>
                    <?php wp_reset_query(); ?>
                </div>
                <?php endif ?>
                </div>
            </div>
        </div>
        <div class="new-cl col-xs-12">
            <div class="container">
                <div class="g-head">
                    <?= get_option('sh_part_second_content');  ?>
                </div>
            </div>
        </div>
        <div class="parts col-xs-12">
            <div class="container">
                <div class="p-imgs col-md-6 col-xs-12">
                    <?php
                    $partners = sh_get_partners(4);
                    if($partners->have_posts()) : 
                    ?>
                    <?php $i=200; while($partners->have_posts()) : $partners->the_post(); ?>
                    <div class="p-block col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?= $i; ?>">
                        <div class="inner">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                    </div>
                    <?php $i+=100; endwhile; wp_reset_query(); ?>
                    <?php endif ?>
                </div>
                <div class="p-data col-md-6 col-xs-12">
                    <div class="g-head" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <h3>Our Partners</h3>
                    </div>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">We’ve partnered up with the most robust companies in Saudi Arabia to deliver high-end and turnkey ICT solutions for all businesses</p>
                </div>
            </div>
        </div>
    </main>
    <?php endwhile; endif;?>
<?php get_footer(); ?>