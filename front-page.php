<?php get_header(); ?>
            <div role="main" class="main">
                <div class="slider-container light rev_slider_wrapper" style="height: 650px;">
                    <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 650, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'navigation' : {'arrows': { 'enable': true, 'style': 'arrows-style-1 arrows-big arrows-dark' }, 'bullets': {'enable': false, 'style': 'bullets-style-1 bullets-color-primary', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
                        <ul>
                            <?php $slides=sh_get_all_slides(2); ?>
                            <?php if($slides->have_posts()) : 
                                        ?>
                                        <?php while($slides->have_posts()) : $slides->the_post(); ?>

                            <li data-transition="fade">
                                <img src="<?php the_post_thumbnail_url(); ?>"  
                                    alt=""
                                    data-bgposition="center center" 
                                    data-bgfit="cover" 
                                    data-bgrepeat="no-repeat" 
                                    data-kenburns="on"
                                    data-duration="9000"
                                    data-ease="Linear.easeNone"
                                    data-scalestart="110"
                                    data-scaleend="100"
                                    data-rotatestart="0"
                                    data-rotateend="0"
                                    data-offsetstart="0 0"
                                    data-offsetend="0 0"
                                    data-bgparallax="0"
                                    class="rev-slidebg">
                                <?php the_content();?>
                
                            </li>
                            <?php endwhile;?>
                            <?php endif; ?>
                            
                        </ul>
                    </div>
                </div>
            
             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   
				
   <?php
     the_content();
    ?>
			

<?php endwhile; endif;?>
            
            <section class="section section-height-3 section-background border-0 m-0 appear-animation" data-appear-animation="fadeIn" style="background-image: url(<?php echo SH_URL; ?>assets/img/parallax/parallax-10.jpg); background-size: cover; background-position: center;">
                    <div class="container">
                        <div class="row">
                            <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                
                                <div class="owl-carousel owl-theme nav-bottom rounded-nav" data-plugin-options="{'items': 1, 'loop': false}">
                                     <?php
                                        $testimonials = sh_get_testimonials(3);
                                        if($testimonials->have_posts()) : 
                                        ?>
                                        <?php while($testimonials->have_posts()) : $testimonials->the_post(); ?>

                                    <div>
                                        <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark mb-0">
                                            <div class="testimonial-author">
                                                <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid rounded-circle" alt="">
                                            </div>
                                            <blockquote>
                                                <p class="text-color-dark text-5 line-height-5 mb-0"><?php the_content();?></p>
                                            </blockquote>
                                            <div class="testimonial-author">
                                                <p><strong class="font-weight-extra-bold text-2"><?php the_title();?></strong></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <?php endwhile;?>
                                    <?php endif;?>
                                    
                                   
                                </div>
                
                            </div>
                        </div>
                    </div>
                </section>
    
    </div>
<?php get_footer(); ?>
