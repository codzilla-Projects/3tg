<?php 
function about_page_content_callback(){
	$wp_editor_settings = array( 
		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue
		'textarea_rows'=> 2
	);    
	if( isset( $_POST['sh_save'] ) && !empty( $_POST['sh_save']) ){
		foreach ($_POST as $key => $value) {
			if(in_array($key,['sh_about_second_content1','sh_about_second_content2','sh_about_second_content3','sh_about_third_content','sh_about_fourth_content','sh_about_fifth_content'])){
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
				<h1 class="text-center sh-title">About Page Content</span></h1>
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
			</div>
		</div>
		<div class="col-sm-9 gray_back">
	  		<form class="form-horizontal" method="post" action="#">
			    <div class="tab-content" id="v-pills-tabContent">
			        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
						<div class="form-group">
						  <label for="about-first_img" class="col-sm-4 control-label">First image</label>
						  <div class="col-sm-12">
						    <img class="first_img" src="<?php echo get_option('sh_about_first_img'); ?>" height="100" style="max-width:100%" />
						    <input class="first_img_url sh_half" type="text" name="sh_about_first_img" size="60" value="<?php echo get_option('sh_about_first_img'); ?>">
	    				    <input class="first_img_id" type="hidden" name="sh_about_first_img_id" value="<?php echo get_option('sh_about_first_img_id'); ?>">
						    <a href="#" class="first_img_upload btn btn-info">Choose</a>
						  </div>
						</div>						
						<div class="form-group">
						  <label for="about-second_img" class="col-sm-4 control-label">Second image</label>
						  <div class="col-sm-12">
						    <img class="second_img" src="<?php echo get_option('sh_about_second_img'); ?>" height="100" style="max-width:100%" />
						    <input class="second_img_url sh_half" type="text" name="sh_about_second_img" size="60" value="<?php echo get_option('sh_about_second_img'); ?>">
						    <input class="second_img_id" type="hidden" name="sh_about_second_img_id" size="60" value="<?php echo get_option('sh_about_second_img_id'); ?>">
						    <a href="#" class="second_img_upload btn btn-info">Choose</a>
						  </div>
						</div>
			        </div>
			        <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
						<div class="form-group">
							<label for="about-second_title1" class="col-sm-4 control-label">First title</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" id="about-second_title1" name="sh_about_second_title1" value="<?php echo get_option('sh_about_second_title1'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="about-second_sec_cont1" class="col-sm-4 control-label">First Content</label>
							<div class="col-sm-12">
						    	<?php wp_editor( get_option('sh_about_second_content1'), 'about-second_sec_cont1',  array('textarea_rows'=>5,'textarea_name'=> 'sh_about_second_content1', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about-second_sec_cont1','class'=>'form-control',) );  ?>
							</div>
						</div>
						<div class="form-group">
							<label for="about-second_title2" class="col-sm-4 control-label">second title</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" id="about-second_title2" name="sh_about_second_title2" value="<?php echo get_option('sh_about_second_title2'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="about-second_sec_cont2" class="col-sm-4 control-label">second Content</label>
							<div class="col-sm-12">
						    	<?php wp_editor( get_option('sh_about_second_content2'), 'about-second_sec_cont2',  array('textarea_rows'=>5,'textarea_name'=> 'sh_about_second_content2', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about-second_sec_cont2','class'=>'form-control',) );  ?>
							</div>
						</div>
						<div class="form-group">
							<label for="about-second_title3" class="col-sm-4 control-label">Third title</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" id="about-second_title3" name="sh_about_second_title3" value="<?php echo get_option('sh_about_second_title3'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="about-second_sec_cont3" class="col-sm-4 control-label">Third Content</label>
							<div class="col-sm-12">
						    	<?php wp_editor( get_option('sh_about_second_content3'), 'about-second_sec_cont3',  array('textarea_rows'=>5,'textarea_name'=> 'sh_about_second_content3', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about-second_sec_cont3','class'=>'form-control',) );  ?>
							</div>
						</div>
				      </div>	      
				      <div class="tab-pane fade" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">
						<div class="form-group">
							<label for="sh_about_third_title" class="col-sm-4 control-label">Third Section title</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" id="sh_about_third_title" name="sh_about_third_title" value="<?php echo get_option('sh_about_third_title'); ?>">
							</div>
						</div>						
						<div class="form-group">
							<label for="about-third_sec_cont" class="col-sm-4 control-label">Third Section Content</label>
							<div class="col-sm-12">
						    	<?php wp_editor( get_option('sh_about_third_content'), 'about-third_sec_cont',  array('textarea_rows'=>5,'textarea_name'=> 'sh_about_third_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about-third_sec_cont','class'=>'form-control',) );  ?>
							</div>
						</div>
			        </div>	      
					<div class="tab-pane fade" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">
						<div class="form-group">
							<label for="sh_about_fourth_title" class="col-sm-4 control-label">Fourth Section title</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" id="sh_about_fourth_title" name="sh_about_fourth_title" value="<?php echo get_option('sh_about_fourth_title'); ?>">
							</div>
						</div>						
						<div class="form-group">
							<label for="about-fourth_sec_cont" class="col-sm-4 control-label">Fourth Section Content</label>
							<div class="col-sm-12">
						    	<?php wp_editor( get_option('sh_about_fourth_content'), 'about-fourth_sec_cont',  array('textarea_rows'=>5,'textarea_name'=> 'sh_about_fourth_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about-fourth_sec_cont','class'=>'form-control',) );  ?>
							</div>
						</div>
						<div class="form-group">
						  <label for="about-third_img" class="col-sm-4 control-label">First image</label>
						  <div class="col-sm-12">
						    <img class="third_img" src="<?php echo get_option('sh_about_fourth_sec_img1'); ?>" height="100" style="max-width:100%" />
						    <input class="third_img_url sh_half" type="text" name="sh_about_fourth_sec_img1" size="60" value="<?php echo get_option('sh_about_fourth_sec_img1'); ?>">
	    				    <input class="third_img_id" type="hidden" name="sh_about_fourth_sec_img_id1" value="<?php echo get_option('sh_about_fourth_sec_img_id1'); ?>">
						    <a href="#" class="third_img_upload btn btn-info">Choose</a>
						  </div>
						</div>
						<div class="form-group">
						  <label for="about-fourth_img" class="col-sm-4 control-label">Second image</label>
						  <div class="col-sm-12">
						    <img class="fourth_img" src="<?php echo get_option('sh_about_fourth_sec_img2'); ?>" height="100" style="max-width:100%" />
						    <input class="fourth_img_url sh_half" type="text" name="sh_about_fourth_sec_img2" size="60" value="<?php echo get_option('sh_about_fourth_sec_img2'); ?>">
	    				    <input class="fourth_img_id" type="hidden" name="sh_about_fourth_sec_img_id2" value="<?php echo get_option('sh_about_fourth_sec_img_id2'); ?>">
						    <a href="#" class="fourth_img_upload btn btn-info">Choose</a>
						  </div>
						</div>
						<div class="form-group">
						  <label for="about-fifth_img" class="col-sm-4 control-label">Third image</label>
						  <div class="col-sm-12">
						    <img class="fifth_img" src="<?php echo get_option('sh_about_fourth_sec_img3'); ?>" height="100" style="max-width:100%" />
						    <input class="fifth_img_url sh_half" type="text" name="sh_about_fourth_sec_img3" size="60" value="<?php echo get_option('sh_about_fourth_sec_img3'); ?>">
	    				    <input class="fifth_img_id" type="hidden" name="sh_about_fourth_sec_img_id3" value="<?php echo get_option('sh_about_fourth_sec_img_id3'); ?>">
						    <a href="#" class="fifth_img_upload btn btn-info">Choose</a>
						  </div>
						</div>
						<div class="form-group">
						  <label for="about-sixth_img" class="col-sm-4 control-label">Fourth image</label>
						  <div class="col-sm-12">
						    <img class="sixth_img" src="<?php echo get_option('sh_about_fourth_sec_img4'); ?>" height="100" style="max-width:100%" />
						    <input class="sixth_img_url sh_half" type="text" name="sh_about_fourth_sec_img4" size="60" value="<?php echo get_option('sh_about_fourth_sec_img4'); ?>">
	    				    <input class="sixth_img_id" type="hidden" name="sh_about_fourth_sec_img_id4" value="<?php echo get_option('sh_about_fourth_sec_img_id4'); ?>">
						    <a href="#" class="sixth_img_upload btn btn-info">Choose</a>
						  </div>
						</div>
					</div>			
					<div class="tab-pane fade" id="v-pills-fifthsection" role="tabpanel" aria-labelledby="v-pills-fifthsection-tab">
						<div class="form-group">
							<label for="sh_about_fifth_title" class="col-sm-4 control-label">Fifth Section title</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" id="sh_about_fifth_title" name="sh_about_fifth_title" value="<?php echo get_option('sh_about_fifth_title'); ?>">
							</div>
						</div>						
						<div class="form-group">
							<label for="about-fifth_sec_cont" class="col-sm-4 control-label">Fifth Section Content</label>
							<div class="col-sm-12">
					    	<?php wp_editor( get_option('sh_about_fifth_content'), 'about-fifth_sec_cont',  array('textarea_rows'=>5,'textarea_name'=> 'sh_about_fifth_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about-fifth_sec_cont','class'=>'form-control',) );  ?>
							</div>
						</div>
						<div class="form-group">
						  <label for="about-seventh_img" class="col-sm-4 control-label">Fifth section image</label>
						  <div class="col-sm-12">
						    <img class="seventh_img" src="<?php echo get_option('sh_about_fifth_sec_img'); ?>" height="100" style="max-width:100%" />
						    <input class="seventh_img_url sh_half" type="text" name="sh_about_fifth_sec_img" size="60" value="<?php echo get_option('sh_about_fifth_sec_img'); ?>">
						    <input class="seventh_img_id" type="hidden" name="sh_about_fifth_sec_img_id" size="60" value="<?php echo get_option('sh_about_fifth_sec_img_id'); ?>">
						    <a href="#" class="seventh_img_upload btn btn-info">Choose</a>
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