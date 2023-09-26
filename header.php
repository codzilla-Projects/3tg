<!DOCTYPE html>
<html>
    <head>

        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   

        <title><?php bloginfo('title'); ?> | <?php echo is_front_page() ? get_bloginfo('description') : get_the_title(); ?></title>

        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="author" content="Shwky Fareed">

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo get_option('sh_favicon_img'); ?>" type="image/x-icon" />
        <link rel="apple-touch-icon" href="<?php echo get_option('sh_favicon_img'); ?>">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

       


        


        <?php wp_head(); ?>
    </head>
    <body>

        <div class="body">
            <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
                <div class="header-body border-top-0">
                    <div class="header-top">
                        <div class="container">
                            <div class="header-row py-2">
                                <div class="header-column justify-content-start">
                                    <div class="header-row">
                                        <nav class="header-nav-top">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                                    <a class="nav-link pl-0" href="<?php bloginfo('url'); ?>/<?php _e('about-us','puffer'); ?>"><i class="fas fa-angle-right"></i> <?php _e('About Us','puffer'); ?></a>
                                                </li>
                                                <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                                    <a class="nav-link" href="<?php bloginfo('url'); ?>/<?php _e('contact-us','puffer'); ?>"><i class="fas fa-angle-right"></i> <?php _e('Contact Us','puffer'); ?></a>
                                                </li>
                                                <li class="nav-item dropdown nav-item-left-border d-none d-sm-block nav-item-left-border-remove nav-item-left-border-md-show">
                                                                                                  

                                                        <?php pll_the_languages(array('show_flags'=>1,'show_names'=>1,'hide_current'=>1));  ?>     
                                                </li>
                                                <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
                                                    <span class="ws-nowrap"><a href="tel:(+971) 067494446" ><i class="fas fa-phone"></i> <?php _e('(+971) 067494446','puffer'); ?></a> </span>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="header-column justify-content-end">
                                    <div class="header-row">
                                        <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean">
                                            <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-container container">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-row">
                                    <div class="header-logo">
                                        <a href="<?php bloginfo('url'); ?>">
                                           <img alt="3TG" width="90" height="90" data-sticky-width="82" data-sticky-height="82" src="<?php echo get_option('sh_logo_img'); ?>">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="header-column justify-content-end">
                                <div class="header-row">
                                    <div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
                                        <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                            <nav class="collapse">
                                               
                                                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'nav nav-pills','menu_id'=>'mainNav','container' => false ) ); ?>

                                                        
                                                </nav>
                                            </div>
                                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                                <i class="fas fa-bars"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
            </header>