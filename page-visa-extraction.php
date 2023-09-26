<?php 
/**
** Template Name: Visa Extraction Template
**/
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div role="main" class="main shop">

				<section class="page-header page-header-modern page-header-background page-header-background-sm overlay overlay-color-primary overlay-show overlay-op-8 mb-5" style="background-image: url(img/page-header/page-header-elements.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1><?php _e('Visa Extraction','puffer'); ?></h1>

							</div>
<!--
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb breadcrumb-light d-block text-center">
									<li><a href="<?php// bloginfo('url'); ?>"><?php// _e('Home','puffer'); ?></a></li>
									<li class="active"><?php// _e('Services','puffer'); ?></li>
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
								<h2 class="font-weight-normal text-7 mb-0"><strong class="font-weight-extra-bold"><?php _e('Visa Extraction','puffer'); ?></strong></h2>
							</div>
							<div class="overflow-hidden mb-4 pb-3">
								<p class="mb-0"><?php _e('Visa Extraction Lorem ipsum dolor sit amet, consectetur adipiscing elit.','puffer'); ?></p>
							</div>

							<div class="accordion accordion-modern" id="accordion">
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												<?php _e('Customer Data','puffer'); ?>
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="collapse show">
										<div class="card-body">
											<form action="/" id="frmBillingAddress" method="post">
												<div class="form-row">
													<div class="form-group col">
														<label class="font-weight-bold text-dark text-2"><?php _e('Visa Type','puffer'); ?></label>
														<select class="form-control">
															<option value=""><?php _e('30 days','puffer'); ?></option>
															<option value=""><?php _e('90 days','puffer'); ?></option>

														</select>
													</div>
												</div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2" for="inputTooltip"><?php _e('Customer Data','puffer'); ?>Name</label>
                                                    
                                                        <input type="text" placeholder="<?php _e('Full Name Like Passport','puffer'); ?>" title="" data-toggle="tooltip" data-trigger="hover" class="form-control" data-original-title="<?php _e('Must be like Passport','puffer'); ?>" id="inputTooltip">
                                                    
                                                    </div>
                                                </div>
                                                
                                                <div class="form-row">
													<div class="form-group col-lg-6">
														<label class="font-weight-bold text-dark text-2"><?php _e('Age','puffer'); ?></label>
														<input type="text" value="" class="form-control">
													</div>
													<div class="form-group col-lg-6">
														<label class="font-weight-bold text-dark text-2"><?php _e('Nationality','puffer'); ?></label>
														<input type="text" value="" class="form-control">
													</div>
												</div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2"><?php _e('Email','puffer'); ?></label>
														<input type="email" value="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-row">
													<div class="form-group col">
														<label class="font-weight-bold text-dark text-2"><?php _e('Gender','puffer'); ?></label>
														<select class="form-control">
															<option value=""><?php _e('Male','puffer'); ?></option>
															<option value=""><?php _e('Female','puffer'); ?></option>

														</select>
													</div>
												</div>
                                                
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label class="font-weight-bold text-dark text-2"><?php _e('Passport image','puffer'); ?></label>
                                                        
                                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                                <div class="input-append">
                                                                    <div class="uneditable-input">
                                                                        <span class="fileupload-preview"></span>
                                                                    </div>
                                                                    <span class="btn btn-default btn-file">
                                                                        <span class="fileupload-exists"><?php _e('Change','puffer'); ?></span>
                                                                        <span class="fileupload-new"><?php _e('Select file','puffer'); ?></span>
                                                                        <input type="file" />
                                                                    </span>
                                                                  
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
										       </div>
                                                
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label class="font-weight-bold text-dark text-2"><?php _e('personal photo','puffer'); ?></label>
                                                        
                                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                                <div class="input-append">
                                                                    <div class="uneditable-input">
                                                                        <span class="fileupload-preview"></span>
                                                                    </div>
                                                                    <span class="btn btn-default btn-file">
                                                                        <span class="fileupload-exists"><?php _e('Change','puffer'); ?></span>
                                                                        <span class="fileupload-new"><?php _e('Select file','puffer'); ?></span>
                                                                        <input type="file" />
                                                                    </span>
                                                                  
                                                                </div>
                                                            </div>
                                                        
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