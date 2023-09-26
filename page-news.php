<?php 
/**
** Template Name: News Template
**/
get_header(); 
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <main class="main-content col-xs-12">
            <div class="single-add news col-xs-12">
                <div class="container">
                    <div class="g-head col-xs-12">
                        <h3>Know Our Latest Activities & Updates</h3>
                    </div>
                    <div class="g-body col-xs-12">
                    <?php
                    $shposts = sh_get_posts(6);
                    if($shposts->have_posts()) : 
                    ?>
                    <?php $i=200; while($shposts->have_posts()) : $shposts->the_post(); ?>
                        <div class="block col-md-4 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?= $i; ?>">
                            <div class="inner">
                                <div class="i-img" style="background-image: url(<?= get_the_post_thumbnail_url(get_the_ID(),'large'); ?>)"></div>
                                <div class="i-data">
                                    <div class="date">
                                        <p>
                                            <span><?= get_the_date('M'); ?></span>
                                            <?= get_the_date('d');  ?>
                                        </p>
                                    </div>
                                    <div class="info">
                                        <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                                    <?php the_excerpt(); ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="btn">
                                        learn more
                                        <img src="<?php echo SH_URL; ?>/assets/images/arrow-right.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php $i+=100; endwhile;?>
                    <?php wp_reset_query(); ?>
                    <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="working col-xs-12">
                <div class="container">
                    <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <h3><?= get_option('sh_news_first_title'); ?></h3>
                        <p><?= get_option('sh_news_first_content'); ?></p>
                    </div>
                    <div class="g-body col-xs-12">
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <div class="inner">
                                <?= sh_get_img(get_option('sh_news_first_service_img'),get_option('sh_news_first_service_img_id'),''); ?>
                                <h3><?= get_option('sh_news_first_service_title'); ?></h3>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                            <div class="inner">
                                <?= sh_get_img(get_option('sh_news_second_service_img'),get_option('sh_news_second_service_img_id'),''); ?>
                                <h3><?= get_option('sh_news_second_service'); ?></h3>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            <div class="inner">
                                <?= sh_get_img(get_option('sh_news_third_service_img'),get_option('sh_news_third_service_img_id'),''); ?>
                                <h3><?= get_option('sh_news_third_service'); ?></h3>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                            <div class="inner">
                                <?= sh_get_img(get_option('sh_news_fourth_service_img'),get_option('sh_news_fourth_service_img_id'),''); ?>
                                <h3><?= get_option('sh_news_fourth_service'); ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="get-touch col-xs-12">
                <div class="container">
                    <div class="g-head col-xs-12">
                        <h3>How can we help? </h3>
                    </div>
                    <div class="g-body col-xs-12">
                        <div class="t-img col-md-6 col-xs-12">
                            <img src="<?php echo SH_URL; ?>/assets/images/emi.png" alt="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        </div>
                        <div class="t-data col-md-6 col-xs-12">
                            <div class="g-head" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <h3><?= get_option('sh_news_second_title'); ?></h3>
                            </div>
                            <form action="#" method="get">
                                <div class="form-group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                    <input type="text" placeholder="Enter your full name" class="form-control">
                                </div>
                                <div class="form-group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                    <input type="email" placeholder="Enter your email" class="form-control">
                                </div>
                                <div class="form-group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                    <input type="text" placeholder="Enter your phone number" class="form-control">
                                </div>
                                <div class="form-group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                                    <textarea class="form-control" placeholder="Enter Description"></textarea>
                                </div>
                                <div class="form-group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                    <button type="submit" class="btn">send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php endwhile; endif;?>
<?php get_footer(); ?>