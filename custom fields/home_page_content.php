<?php 
function home_page_content_callback(){
	$wp_editor_settings = array( 
		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue
		'textarea_rows'=> 2
	);    
	if( isset( $_POST['sh_save'] ) && !empty( $_POST['sh_save']) ){
		foreach ($_POST as $key => $value) {
			if(in_array($key,['sh_home_first_content','sh_shome_second_content','sh_shome_third_content','sh_shome_fourth_content','sh_shome_fifth_content','sh_shome_sixth_content'])){
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
				<h1 class="text-center sh-title">Home Page Content</span></h1>
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
							<label for="home-first_sec_title" class="col-sm-4 control-label">First section title</label>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="home-first_sec_title" name="sh_home_first_title" value="<?php echo get_option('sh_home_first_title'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="home-first_sec_cont" class="col-sm-4 control-label">First Section Content</label>
							<div class="col-sm-12">
						    	<?php wp_editor( get_option('sh_home_first_content'), 'home-first_sec_cont',  array('textarea_rows'=>5,'textarea_name'=> 'sh_home_first_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'home-first_sec_cont','class'=>'form-control',) );  ?>
							</div>
						</div>
			        </div>
			        <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
			  			<div class="form-group">
							<label for="home-second_sec_title" class="col-sm-4 control-label">Second section title</label>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="home-second_sec_title" name="sh_home_second_title" value="<?php echo get_option('sh_home_second_title'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="home-second_sec_cont" class="col-sm-4 control-label">Second Section Content</label>
							<div class="col-sm-12">
						    	<?php wp_editor( get_option('sh_shome_second_content'), 'home-second_sec_cont',  array('textarea_rows'=>5,'textarea_name'=> 'sh_shome_second_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'home-second_sec_cont','class'=>'form-control',) );  ?>
							</div>
						</div>
				      </div>	      
				      <div class="tab-pane fade" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">
			  			<div class="form-group">
							<label for="home-third_sec_title" class="col-sm-4 control-label">Third section title</label>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="home-third_sec_title" name="sh_home_third_title" value="<?php echo get_option('sh_home_third_title'); ?>">
							</div>
						</div>
			  			<div class="form-group">
							<label for="home-third_sec_subtitle" class="col-sm-4 control-label">Third section subtitle</label>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="home-third_sec_subtitle" name="sh_home_third_subtitle" value="<?php echo get_option('sh_home_third_subtitle'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="home-third_sec_cont" class="col-sm-4 control-label">Third Section Content</label>
							<div class="col-sm-12">
						    	<?php wp_editor( get_option('sh_shome_third_content'), 'home-third_sec_cont',  array('textarea_rows'=>5,'textarea_name'=> 'sh_shome_third_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'home-third_sec_cont','class'=>'form-control',) );  ?>
							</div>
						</div>
						<div class="form-group sh_half fleft">
							<label for="third_sec_btn_text" class="col-sm-6 control-label">Third button text</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="third_sec_btn_text" name="sh_home_third_btn_text" value="<?php echo get_option('sh_home_third_btn_text'); ?>">
							</div>
						</div>	
						<div class="form-group sh_half fright">
							<label for="third_sec_btn_link" class="col-sm-6 control-label">Third button link</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="third_sec_btn_link"  name="sh_home_third_btn_link" value="<?php echo get_option('sh_home_third_btn_link'); ?>">
							</div>
						</div>
						<div class="form-group">
						  <label for="home-first_img" class="col-sm-4 control-label">Third section image</label>
						  <div class="col-sm-12">
						    <img class="first_img" src="<?php echo get_option('sh_home_first_img'); ?>" height="100" style="max-width:100%" />
						    <input class="first_img_url sh_half" type="text" name="sh_home_first_img" size="60" value="<?php echo get_option('sh_home_first_img'); ?>">
	    				    <input class="first_img_id" type="hidden" name="sh_home_first_img_id" value="<?php echo get_option('sh_home_first_img_id'); ?>">
						    <a href="#" class="first_img_upload btn btn-info">Choose</a>
						  </div>
						</div>
			        </div>	      
					<div class="tab-pane fade" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">
						<div class="form-group">
							<label for="home-fourth_sec_title" class="col-sm-4 control-label">Fourth section title</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" id="home-fourth_sec_title" name="sh_home_fourth_title" value="<?php echo get_option('sh_home_fourth_title'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="home-fourth_sec_cont" class="col-sm-4 control-label">Fourth Section Content</label>
							<div class="col-sm-12">
					    	<?php wp_editor( get_option('sh_shome_fourth_content'), 'home-fourth_sec_cont',  array('textarea_rows'=>5,'textarea_name'=> 'sh_shome_fourth_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'home-fourth_sec_cont','class'=>'form-control',) );  ?>
							</div>
						</div>
					</div>			
					<div class="tab-pane fade" id="v-pills-fifthsection" role="tabpanel" aria-labelledby="v-pills-fifthsection-tab">
						<div class="form-group">
							<label for="home-fifth_sec_title" class="col-sm-4 control-label">Fifth section title</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" id="home-fifth_sec_title" name="sh_home_fifth_title" value="<?php echo get_option('sh_home_fifth_title'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="home-fifth_sec_cont" class="col-sm-4 control-label">Fifth Section Content</label>
							<div class="col-sm-12">
					    	<?php wp_editor( get_option('sh_shome_fifth_content'), 'home-fifth_sec_cont',  array('textarea_rows'=>5,'textarea_name'=> 'sh_shome_fifth_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'home-fifth_sec_cont','class'=>'form-control',) );  ?>
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