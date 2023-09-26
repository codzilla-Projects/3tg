<?php 
function products_page_content_callback(){
	$wp_editor_settings = array( 
		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue
		'textarea_rows'=> 2
	);    
	if( isset( $_POST['sh_save'] ) && !empty( $_POST['sh_save']) ){
		foreach ($_POST as $key => $value) {
			if(in_array($key,['sh_pro_first_content','sh_pro_second_content','sh_pro_third_content','sh_pro_fourth_content','sh_pro_fifth_content'])){
				$value = stripcslashes($value);
			}									
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
				<h1 class="text-center sh-title">Products Page Content</span></h1>
				<br>
			</header>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a class="nav-link active" id="v-pills-firstsection-tab" data-toggle="pill" href="#v-pills-firstsection" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">First Section</a>
				<a class="nav-link" id="v-pills-secondsection-tab" data-toggle="pill" href="#v-pills-secondsection" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">Second Section</a>
				<a class="nav-link" id="v-pills-thirdsection-tab" data-toggle="pill" href="#v-pills-thirdsection" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false">Third Section</a>
				<a class="nav-link" id="v-pills-fourthsection-tab" data-toggle="pill" href="#v-pills-fourthsection" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false">Fourth Section</a>
				<a class="nav-link" id="v-pills-fifthsection-tab" data-toggle="pill" href="#v-pills-fifthsection" role="tab" aria-controls="v-pills-fifthsection" aria-selected="false">Fifth Section</a>
				<a class="nav-link" id="v-pills-sixthsection-tab" data-toggle="pill" href="#v-pills-sixthsection" role="tab" aria-controls="v-pills-sixthsection" aria-selected="false">Sixth Section</a>
			</div>
		</div>
		<div class="col-sm-9 gray_back">
	  		<form class="form-horizontal" method="post" action="#">
			    <div class="tab-content" id="v-pills-tabContent">
			        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
						<div class="form-group">
							<label for="pro-first_sec_cont" class="col-sm-4 control-label">First Section Content</label>
							<div class="col-sm-12">
						    	<?php wp_editor( get_option('sh_pro_first_content'), 'pro-first_sec_cont',  array('textarea_rows'=>5,'textarea_name'=> 'sh_pro_first_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'pro-first_sec_cont','class'=>'form-control',) );  ?>
							</div>
						</div>
						<div class="form-group">
						  <label for="pro-first_img" class="col-sm-4 control-label">First section image</label>
						  <div class="col-sm-12">
						    <img class="first_img" src="<?php echo get_option('sh_pro_first_img'); ?>" height="100" style="max-width:100%" />
						    <input class="first_img_url sh_half" type="text" name="sh_pro_first_img" size="60" value="<?php echo get_option('sh_pro_first_img'); ?>">
						    <input class="first_img_id" type="hidden" name="sh_pro_first_img_id" value="<?php echo get_option('sh_pro_first_img_id'); ?>">
						    <a href="#" class="first_img_upload btn btn-info">Choose</a>
						  </div>
						</div>
			        </div>
			        <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
						<div class="form-group">
							<label for="pro-second_sec_cont" class="col-sm-4 control-label">Second Section Content</label>
							<div class="col-sm-12">
						    	<?php wp_editor( get_option('sh_pro_second_content'), 'pro-second_sec_cont',  array('textarea_rows'=>5,'textarea_name'=> 'sh_pro_second_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'pro-second_sec_cont','class'=>'form-control',) );  ?>
							</div>
						</div>
						<div class="form-group">
						  <label for="pro-second_img" class="col-sm-4 control-label">Second section image</label>
						  <div class="col-sm-12">
						    <img class="second_img" src="<?php echo get_option('sh_pro_second_img'); ?>" height="100" style="max-width:100%" />
						    <input class="second_img_url sh_half" type="text" name="sh_pro_second_img" size="60" value="<?php echo get_option('sh_pro_second_img'); ?>">
						    <input class="second_img_id" type="hidden" name="sh_pro_second_img_id" value="<?php echo get_option('sh_pro_second_img_id'); ?>">
						    <a href="#" class="second_img_upload btn btn-info">Choose</a>
						  </div>
						</div>
				      </div>	      
				      <div class="tab-pane fade" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">
						<div class="form-group">
							<label for="pro-third_sec_cont" class="col-sm-4 control-label">Third Section Content</label>
							<div class="col-sm-12">
						    	<?php wp_editor( get_option('sh_pro_third_content'), 'pro-third_sec_cont',  array('textarea_rows'=>5,'textarea_name'=> 'sh_pro_third_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'pro-third_sec_cont','class'=>'form-control',) );  ?>
							</div>
						</div>
						<div class="form-group">
						  <label for="pro-third_img" class="col-sm-4 control-label">Third section image</label>
						  <div class="col-sm-12">
						    <img class="third_img" src="<?php echo get_option('sh_pro_third_img'); ?>" height="100" style="max-width:100%" />
						    <input class="third_img_url sh_half" type="text" name="sh_pro_third_img" size="60" value="<?php echo get_option('sh_pro_third_img'); ?>">
						    <input class="third_img_id" type="hidden" name="sh_pro_third_img_id" value="<?php echo get_option('sh_pro_third_img_id'); ?>">
						    <a href="#" class="third_img_upload btn btn-info">Choose</a>
						  </div>
						</div>
			        </div>	      
					<div class="tab-pane fade" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">
						<div class="form-group">
							<label for="pro-fourth_sec_cont" class="col-sm-4 control-label">Fourth Section Content</label>
							<div class="col-sm-12">
						    	<?php wp_editor( get_option('sh_pro_fourth_content'), 'pro-fourth_sec_cont',  array('textarea_rows'=>5,'textarea_name'=> 'sh_pro_fourth_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'pro-fourth_sec_cont','class'=>'form-control',) );  ?>
							</div>
						</div>
						<div class="form-group">
						  <label for="pro-fourth_img" class="col-sm-4 control-label">Fourth section image</label>
						  <div class="col-sm-12">
						    <img class="fourth_img" src="<?php echo get_option('sh_pro_fourth_img'); ?>" height="100" style="max-width:100%" />
						    <input class="fourth_img_url sh_half" type="text" name="sh_pro_fourth_img" size="60" value="<?php echo get_option('sh_pro_fourth_img'); ?>">
						    <input class="fourth_img_id" type="hidden" name="sh_pro_fourth_img_id" value="<?php echo get_option('sh_pro_fourth_img_id'); ?>">
						    <a href="#" class="fourth_img_upload btn btn-info">Choose</a>
						  </div>
						</div>
					</div>			
					<div class="tab-pane fade" id="v-pills-fifthsection" role="tabpanel" aria-labelledby="v-pills-fifthsection-tab">
						<div class="form-group">
							<label for="pro-fifth_sec_title" class="col-sm-4 control-label">Fifth section title</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" id="pro-fifth_sec_title" name="sh_pro_fifth_title" value="<?php echo get_option('sh_pro_fifth_title'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="pro-fifth_sec_cont" class="col-sm-4 control-label">Fifth Section Content</label>
							<div class="col-sm-12">
					    	<?php wp_editor( get_option('sh_pro_fifth_content'), 'pro-fifth_sec_cont',  array('textarea_rows'=>5,'textarea_name'=> 'sh_pro_fifth_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'pro-fifth_sec_cont','class'=>'form-control',) );  ?>
							</div>
						</div>
						<div class="form-group sh_half fleft">
							<label for="fifth_sec_btn_text" class="col-sm-6 control-label">Fifth button text</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="fifth_sec_btn_text" name="sh_pro_fifth_btn_text" value="<?php echo get_option('sh_pro_fifth_btn_text'); ?>">
							</div>
						</div>	
						<div class="form-group sh_half fright">
							<label for="fifth_sec_btn_link" class="col-sm-6 control-label">Fifth button link</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="fifth_sec_btn_link"  name="sh_pro_fifth_btn_link" value="<?php echo get_option('sh_pro_fifth_btn_link'); ?>">
							</div>
						</div>												
					</div>
					<div class="tab-pane fade" id="v-pills-sixthsection" role="tabpanel" aria-labelledby="v-pills-sixthsection-tab">
						<div class="form-group">
							<label for="pro-sixth_sec_title" class="col-sm-4 control-label">Sixth section title</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" id="pro-sixth_sec_title" name="sh_pro_sixth_title" value="<?php echo get_option('sh_pro_sixth_title'); ?>">
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