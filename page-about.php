<?php 
/**
** Template Name: About Template
**/
get_header(); ?>
<div role="main" class="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   

				
   <?php
     the_content();
    ?>



<?php endwhile; endif;?>
             <div class="row">
						<div class="col-md-8 mx-md-auto text-center">

							<h2 class="text-color-dark font-weight-normal text-5 mb-0 pt-2"><strong class="font-weight-extra-bold"><?php _e('Our History','puffer'); ?></strong></h2>
							<p><?php _e('How we started, lorem ipsum dolor sit amet, consectetur adipiscing elit ac laoreet libero.','puffer'); ?></p>

							<section class="timeline" id="timeline">
								<div class="timeline-body">
                                    
                                     <?php
                                        $histories = ha_get_histories(3);
                                        if($histories->have_posts()) :
                                         $count=0;
                                        ?>
                                        <?php while($histories->have_posts()) : $histories->the_post(); ?>
                                        <?php $id=get_the_ID();?>
                                        <?php $year=get_post_meta( $id, 'history_date' , true );?>

                                    
									<div class="timeline-date">
										<h3 class="text-primary font-weight-bold"><?php echo $year;?></h3>
									</div>

									<article class="timeline-box <?php if($count %2==0){echo "left";}else{echo "right";}?>  text-left appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
										<div class="timeline-box-arrow"></div>
										<div class="p-2">
											<img alt="" class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" />
											<h3 class="font-weight-bold text-3 mt-3 mb-1"><?php the_title();?></h3>
											<p class="mb-0 text-2"><?php the_excerpt();?></p>
										</div>
									</article>
                                   <?php $count++;  ?>
                                    
                                    <?php endwhile;?>
                                    <?php endif; ?>
                                    
								</div>
							</section>

						</div>
					</div>
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