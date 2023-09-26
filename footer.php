<footer id="footer">
                <div class="container">
                    <div class="footer-ribbon">
                        <span><?php _e('Get in Touch','puffer'); ?></span>
                    </div>
                    <div class="row py-5 my-4">
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <?php
                            if ( is_active_sidebar( 'footer-first-widget' ) ) : ?>
                                <?php dynamic_sidebar( 'footer-first-widget' ); ?>                                 
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                            
                             
                            <ul class="list list-icons list-icons-sm d-inline-flex flex-column">
                                <?php
                                    if ( is_active_sidebar( 'footer-second-widget' ) ) : ?>
                                        <?php dynamic_sidebar( 'footer-second-widget' ); ?>                                 
                                    <?php endif; ?>
                            </ul>
<!--
                            <h5 class="text-3 mb-3">Pages</h5>
                            <ul class="list list-icons list-icons-sm d-inline-flex flex-column">
                                <li class="text-4 mb-2"><i class="fas fa-angle-right"></i><a href="page-services.html" class="link-hover-style-1 ml-1"> Our Services</a></li>
                                <li class="text-4 mb-2"><i class="fas fa-angle-right"></i><a href="about-us.html" class="link-hover-style-1 ml-1"> About Us</a></li>
                                <li class="text-4 mb-2"><i class="fas fa-angle-right"></i><a href="contact-us.html" class="link-hover-style-1 ml-1"> Contact Us</a></li>
                            </ul>
-->
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                            <div class="contact-details">
                                
                                 <?php
                                    if ( is_active_sidebar( 'footer-third-widget' ) ) : ?>
                                        <?php dynamic_sidebar( 'footer-third-widget' ); ?>                                 
                                    <?php endif; ?>
<!--
                                <ul class="list list-icons list-icons-lg">
                                    <li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">234 Street Name, City Name</p></li>
                                    <li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:8001234567">(800) 123-4567</a></p></li>
                                    <li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">info@3tg.com</a></p></li>
                                </ul>
-->
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            
                            <?php
                                    if ( is_active_sidebar( 'footer-fourth-widget' ) ) : ?>
                                        <?php dynamic_sidebar( 'footer-fourth-widget' ); ?>                                 
                                    <?php endif; ?>
<!--
                            <ul class="social-icons">
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
-->
                        </div>
                    </div>
                </div>
                <div class="footer-copyright footer-copyright-style-2">
                    <div class="container py-2">
                        <div class="row py-4">
                            <div class="col d-flex align-items-center justify-content-center">
                                <p>© <?php _e("Copyright ".date('Y').". All Rights Reserved.",'puffer'); ?></p>
                                <p>© <?php _e('hello there!!','puffer'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <!-- Vendor -->


        <script src="<?php echo SH_URL; ?>assets/vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo SH_URL; ?>assets/vendor/jquery.appear/jquery.appear.min.js"></script>
        <script src="<?php echo SH_URL; ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="<?php echo SH_URL; ?>assets/vendor/jquery.cookie/jquery.cookie.min.js"></script>
        <script src="<?php echo SH_URL; ?>assets/vendor/popper/umd/popper.min.js"></script>
        <script src="<?php echo SH_URL; ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo SH_URL; ?>assets/vendor/common/common.min.js"></script>
        <script src="<?php echo SH_URL; ?>assets/vendor/jquery.validation/jquery.validate.min.js"></script>
        <script src="<?php echo SH_URL; ?>assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
        <script src="<?php echo SH_URL; ?>assets/vendor/jquery.gmap/jquery.gmap.min.js"></script>
        <script src="<?php echo SH_URL; ?>assets/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
        <script src="<?php echo SH_URL; ?>assets/vendor/isotope/jquery.isotope.min.js"></script>
        <script src="<?php echo SH_URL; ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="<?php echo SH_URL; ?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo SH_URL; ?>assets/vendor/vide/jquery.vide.min.js"></script>
        <script src="<?php echo SH_URL; ?>assets/vendor/vivus/vivus.min.js"></script>
        
        <!-- Theme Base, Components and Settings -->
        <script src="<?php echo SH_URL; ?>assets/js/theme.js"></script>
        
        <!-- Current Page Vendor and Views -->
        <script src="<?php echo SH_URL; ?>assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="<?php echo SH_URL; ?>assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <!-- Current Page Vendor and Views -->
        <script src="<?php echo SH_URL; ?>assets/js/views/view.contact.js"></script>

        <!-- Theme Custom -->
        <script src="<?php echo SH_URL; ?>assets/js/custom.js"></script>
        
        <!-- Theme Initialization Files -->
        <script src="<?php echo SH_URL; ?>assets/js/theme.init.js"></script>

        <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
            ga('create', 'UA-12345678-1', 'auto');
            ga('send', 'pageview');
        </script>
         -->
         <?php wp_footer(); ?>
    </body>
</html>
