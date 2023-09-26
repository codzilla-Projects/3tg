<?php 
function main_content_area_callback(){
	$wp_editor_settings = array( 
		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue
		'textarea_rows'=> 2
	);    
	if( isset( $_POST['sh_save'] ) && !empty( $_POST['sh_save']) ){
		foreach ($_POST as $key => $value) {
			update_option( $key, $value);
		}
	}
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<!-- Top Navigation -->
			<header class="codrops-header">
				<br>
				<h1 class="text-center sh-title">Bazy Track Options</span></h1>
				<br>
			</header>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a class="nav-link active" id="v-pills-firstsection-tab" data-toggle="pill" href="#v-pills-firstsection" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">Logo</a>
				<a class="nav-link" id="v-pills-secondsection-tab" data-toggle="pill" href="#v-pills-secondsection" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">Contact</a>
				<a class="nav-link" id="v-pills-thirdsection-tab" data-toggle="pill" href="#v-pills-thirdsection" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false">Social Networks</a>
			</div>
		</div>
		<div class="col-sm-9 gray_back">
	  		<form class="form-horizontal" method="post" action="#">
			    <div class="tab-content" id="v-pills-tabContent">
			        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
						<div class="form-group">
						  <label for="sh_website_logo" class="col-sm-4 control-label">Logo image</label>
						  <div class="col-sm-12">
						    <img class="first_img" src="<?php echo get_option('sh_logo_img'); ?>" height="100" style="max-width:100%" />
						    <input class="first_img_url sh_half" type="text" name="sh_logo_img" size="60" value="<?php echo get_option('sh_logo_img'); ?>">
						    <input class="first_img_id" type="hidden" name="sh_logo_img_id" value="<?php echo get_option('sh_logo_img_id'); ?>">
						    <a href="#" class="first_img_upload btn btn-info">Choose</a>
						  </div>
						</div>
						<div class="form-group">
						  <label for="sh_website_favicon" class="col-sm-4 control-label">Favicon image</label>
						  <div class="col-sm-12">
						    <img class="second_img" src="<?php echo get_option('sh_favicon_img'); ?>" height="100" style="max-width:100%" />
						    <input class="second_img_url sh_half" type="text" name="sh_favicon_img" size="60" value="<?php echo get_option('sh_favicon_img'); ?>">
						    <input class="second_img_id" type="hidden" name="sh_favicon_img_id" value="<?php echo get_option('sh_favicon_img_id'); ?>">
						    <a href="#" class="second_img_upload btn btn-info">Choose</a>
						  </div>
						</div>		        
			        </div>
			        <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
						<div class="form-group">
							<label for="sh_address" class="col-sm-4 control-label">Address</label>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="sh_address" name="sh_address" value="<?php echo get_option('sh_address'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="sh_email" class="col-sm-4 control-label">Email</label>
							<div class="col-sm-12">
								<input type="email" class="form-control" id="sh_email" name="sh_email" value="<?php echo get_option('sh_email'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="sh_phone" class="col-sm-4 control-label">Phone Number</label>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="sh_phone" name="sh_phone" value="<?php echo get_option('sh_phone'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="sh_support_num" class="col-sm-4 control-label">Support Center</label>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="sh_support_num" name="sh_support_num" value="<?php echo get_option('sh_support_num'); ?>">
							</div>
						</div>				
				    </div>	      
					<div class="tab-pane fade" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">
						<div class="form-group">
							<label for="sh_fb" class="col-sm-4 control-label">Facebook</label>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="sh_fb" name="sh_fb" value="<?php echo get_option('sh_fb'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="sh_twitter" class="col-sm-4 control-label">Twitter</label>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="sh_twitter" name="sh_twitter" value="<?php echo get_option('sh_twitter'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="sh_insta" class="col-sm-4 control-label">Instagram</label>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="sh_insta" name="sh_insta" value="<?php echo get_option('sh_insta'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="sh_google" class="col-sm-4 control-label">Youtube</label>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="sh_google" name="sh_google" value="<?php echo get_option('sh_google'); ?>">
							</div>
						</div>
					</div>
			    </div>
				<div class="form-group">
					<div class="col-sm-12">
					<input type="submit" class="btn btn-default btn-block btn-lg sh_save_route" name="sh_save" value="Save !!">
					</div>
				</div>
			</form>
	 	</div>
	</div>
</div><!-- /container -->
<?php
}