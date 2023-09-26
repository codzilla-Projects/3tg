<?php 
/**
** Template Name: Shipping Template
**/
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   
<div role="main" class="main shop">

				<section class="page-header page-header-modern page-header-background page-header-background-sm overlay overlay-color-primary overlay-show overlay-op-8 mb-5" style="background-image: url(img/page-header/page-header-elements.jpg);">
	<div class="container">
						<div class="row">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1><?php _e('Shipping','puffer'); ?></h1>

							</div>
<!--
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb breadcrumb-light d-block text-center">
									<li><a href="<?php //bloginfo('url'); ?>"><?php// _e('Home','puffer'); ?></a></li>
									<li class="active"><?php //_e('Services','puffer'); ?></li>
								</ul>
							</div>
-->
						</div>
					</div>
				</section>
                
                
               <div class="container py-2">

					<div class="row">
						<div class="col-lg-3 order-2 order-lg-1">
							<aside class="sidebar mt-2">
								<h5 class="font-weight-bold"><?php _e('Our Services','puffer'); ?></h5>
								<ul class="nav nav-list flex-column">
									<li class="nav-item"><a class="nav-link" href="<?php bloginfo('url'); ?>/visa-extraction"><?php _e('Visa Extraction','puffer'); ?></a></li>
									<li class="nav-item"><a class="nav-link" href="<?php bloginfo('url'); ?>/shipping"><?php _e('Shipping','puffer'); ?></a></li>
									
								</ul>
							</aside>
						</div>
						<div class="col-lg-9 order-1 order-lg-2">
							
							<div class="overflow-hidden mb-1">
								<h2 class="font-weight-normal text-7 mb-0"><strong class="font-weight-extra-bold"><?php _e('Shipping','puffer'); ?></strong></h2>
							</div>
							<div class="overflow-hidden mb-4 pb-3">
								<p class="mb-0"><?php _e(' Shipping Lorem ipsum dolor sit amet, consectetur adipiscing elit.','puffer'); ?></p>
							</div>

							<div class="accordion accordion-modern" id="accordion">
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												<?php _e('Shipping Process Data','puffer'); ?>
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="collapse show">
										<div class="card-body">
											<form action="/" id="frmBillingAddress" method="post">
												<div class="form-row">
													<div class="form-group col-lg-6">
														<label class="font-weight-bold text-dark text-2"><?php _e('From','puffer'); ?></label>
														<input type="text" value="" class="form-control">
													</div>
													<div class="form-group col-lg-6">
														<label class="font-weight-bold text-dark text-2"><?php _e('To','puffer'); ?></label>
														<input type="text" value="" class="form-control">
													</div>
												</div>
                                            
                                                
                                                 <div class="form-row">
                                                    <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2"><?php _e('Weight','puffer'); ?></label>
														<input type="text" value="" class="form-control">
                                                    </div>
                                                </div>
                                                
                                                 <div class="form-row">
                                                    <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2"><?php _e('The recipient name','puffer'); ?></label>
														<input type="text" value="" class="form-control">
                                                    </div>
                                                </div>
                                                  
                                                  <div class="form-row">
                                                    <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2"><?php _e('Recipient number','puffer'); ?></label>
														<input type="tel" value="" class="form-control">
                                                    </div>
                                                </div>
                                                
                                                 <div class="form-row">
                                                    <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2"><?php _e('Address','puffer'); ?></label>
														<input type="text" value="" class="form-control">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2"><?php _e('Your Email','puffer'); ?></label>
														<input type="email" value="" class="form-control">
                                                    </div>
                                                </div>
										
                                                <div class="form-row">
													<div class="form-group col">
														<input type="submit" value="<?php _e('Send','puffer'); ?>" class="btn btn-xl btn-light pr-4 pl-4 text-2 font-weight-semibold text-uppercase float-right mb-2" data-loading-text="Loading...">
													</div>
												</div>
										
                            </form>
                            
                        </div>
                    </div>
                </div>
                           
                     </div>
            </div>
                        </div>
                </div>
            </div>
            

<?php endwhile; endif;?>

<?php get_footer(); ?>