<?php 
/**
** Template Name: Support Template
**/
get_header(); 
?>
<main class="main-content col-xs-12">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="support-hero col-xs-12" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>)">
        <div class="container">
                <?php the_content(); ?>
<!--             <form action="#" method="get">
                <div class="form-group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <input type="search" class="form-control" placeholder="search for an answer...">
                    <button type="submit" class="btn">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
 -->        </div>
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
                <li>support</li>
            </ul>
        </div>
    </div>
    <div class="support-tobics col-xs-12">
        <div class="container">
            <ul class="nav-tabs col-xs-12">
            <?php $faq_cats =  get_terms( array('taxonomy' => 'faq_cat','hide_empty' => false,'ordery'=>'name','order'=>'ASC') ); $i= 0;?>
            <?php foreach($faq_cats as $faq_cat) : ?>
            <li class="<?php echo $i === 0 ?'active' :'';?> block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <a href="#" data-toggle="tab" data-target="#<?php echo $faq_cat->term_id; ?>">
                    <div class="i-img">
                        <img src="<?php echo get_option('faq_cat_img_'.$faq_cat->term_id); ?>" alt="">
                    </div>
                    <?php echo $faq_cat->name;?>
                </a>
            </li>
            <?php $i++;endforeach;$i=0; ?>
            </ul>
            <div class="tab-content col-xs-12">
                <?php foreach($faq_cats as $faq_cat) : ?>
                <div class="tab-pane fade <?php echo $i === 0 ?'active in' :'';?>" id="<?php echo $faq_cat->term_id; ?>">
                    <div class="tab-head col-xs-12">
                        <h3><?php echo $faq_cat->description; ?></h3>
                    </div>
                    <div class="tab-inner col-md-12 col-xs-12">
                        <div class="panel-group" id="accordion">
                            <?php $faqs = sh_get_faqs($faq_cat->term_id); ?>
                            <?php foreach ($faqs as $faq) :?>
                            <div class="panel panel-default col-md-6">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#it-<?= $faq_cat->term_id; ?><?= $faq->ID; ?>"><?php echo $faq->post_title; ?></a>
                                    </h4>
                                </div>
                                <div id="it-<?= $faq_cat->term_id; ?><?= $faq->ID;?>" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <?php echo $faq->post_content; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php $i++;endforeach; ?>
            </div>
        </div>
    </div>
    <div class="support-form col-xs-12">
        <div class="container">
            <div class="g-head col-xs-12">
                <h3>submit a ticket</h3>
            </div>
            <div class="g-body col-xs-12">
                <form action="#" method="get">
                    <div class="form-group col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <input type="text" placeholder="ticket category" class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <input type="text" placeholder="full name" class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <input type="email" placeholder="email address" class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                        <input type="text" placeholder="ticket subject" class="form-control">
                    </div>
                    <div class="form-group col-md-12 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                        <textarea class="form-control" placeholder="your query"></textarea>
                    </div>
                    <div class="form-group col-md-12 col-xs-12">
                        <button type="submit" class="btn">create ticket</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>