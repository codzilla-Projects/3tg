<?php 
function news_page_content_callback(){
	$wp_editor_settings = array( 
		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue
		'textarea_rows'=> 2
	);    
	if( isset( $_POST['sh_save'] ) && !empty( $_POST['sh_save']) ){
		foreach ($_POST as $key => $value) {
			if(in_array($key,['sh_contact_first_content'])){
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
				<h1 class="text-center sh-title">News Page Content</span></h1>
				<br>
			</header>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a class="nav-link active" id="v-pills-firstsection-tab" data-toggle="pill" href="#v-pills-firstsection" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">First Section</a>
				<a class="nav-link" id="v-pills-secondsection-tab" data-toggle="pill" href="#v-pills-secondsection" role="tab" aria-controls="v-pills-secondsection" aria-selected="true">Second Section</a>
			</div>
		</div>
		<div class="col-sm-9 gray_back">
	  		<form class="form-horizontal" method="post" action="#">
			    <div class="tab-content" id="v-pills-tabContent">
			        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
						<div class="form-group">
							<label for="news-first_title" class="col-sm-4 control-label">First Section title</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" id="news-first_title" name="sh_news_first_title" value="<?php echo get_option('sh_news_first_title'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="news-first_cont" class="col-sm-4 control-label">First Section Content</label>
							<div class="col-sm-12">
						    	<?php wp_editor( get_option('sh_news_first_content'), 'news-first_cont',  array('textarea_rows'=>5,'textarea_name'=> 'sh_news_first_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'news-first_cont','class'=>'form-control',) );  ?>
							</div>
						</div>
						<div class="form-group">
							<label for="news-first_serviec" class="col-sm-4 control-label">First service title</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" id="news-first_serviec" name="sh_news_first_service_title" value="<?php echo get_option('sh_news_first_service_title'); ?>">
							</div>
						</div>
						<div class="form-group">
						  <label class="col-sm-4 control-label">First service image</label>
						  <div class="col-sm-12">
						    <img class="third_img" src="<?php echo get_option('sh_news_first_service_img'); ?>" height="100" style="max-width:100%" />
						    <input class="third_img_url sh_half" type="text" name="sh_news_first_service_img" size="60" value="<?php echo get_option('sh_news_first_service_img'); ?>">
	    				    <input class="third_img_id" type="hidden" name="sh_news_first_service_img_id" value="<?php echo get_option('sh_news_first_service_img_id'); ?>">
						    <a href="#" class="third_img_upload btn btn-info">Choose</a>
						  </div>
						</div>
						<div class="form-group">
							<label for="news-second_serviec" class="col-sm-4 control-label">Second service title</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" id="news-second_serviec" name="sh_news_second_service" value="<?php echo get_option('sh_news_second_service'); ?>">
							</div>
						</div>
						<div class="form-group">
						  <label class="col-sm-4 control-label">Second service image</label>
						  <div class="col-sm-12">
						    <img class="fourth_img" src="<?php echo get_option('sh_news_second_service_img'); ?>" height="100" style="max-width:100%" />
						    <input class="fourth_img_url sh_half" type="text" name="sh_news_second_service_img" size="60" value="<?php echo get_option('sh_news_second_service_img'); ?>">
	    				    <input class="fourth_img_id" type="hidden" name="sh_news_second_service_img_id" value="<?php echo get_option('sh_news_second_service_img_id'); ?>">
						    <a href="#" class="fourth_img_upload btn btn-info">Choose</a>
						  </div>
						</div>						
						<div class="form-group">
							<label for="news-third_serviec" class="col-sm-4 control-label">Third service title</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" id="news-third_serviec" name="sh_news_third_service" value="<?php echo get_option('sh_news_third_service'); ?>">
							</div>
						</div>
						<div class="form-group">
						  <label class="col-sm-4 control-label">Third service image</label>
						  <div class="col-sm-12">
						    <img class="fifth_img" src="<?php echo get_option('sh_news_third_service_img'); ?>" height="100" style="max-width:100%" />
						    <input class="fifth_img_url sh_half" type="text" name="sh_news_third_service_img" size="60" value="<?php echo get_option('sh_news_third_service_img'); ?>">
	    				    <input class="fifth_img_id" type="hidden" name="sh_news_third_service_img_id" value="<?php echo get_option('sh_news_third_service_img_id'); ?>">
						    <a href="#" class="fifth_img_upload btn btn-info">Choose</a>
						  </div>
						</div>						
						<div class="form-group">
							<label for="news-fourth_serviec" class="col-sm-4 control-label">Fourth service title</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" id="news-fourth_serviec" name="sh_news_fourth_service" value="<?php echo get_option('sh_news_fourth_service'); ?>">
							</div>
						</div>
						<div class="form-group">
						  <label class="col-sm-4 control-label">Fourth image</label>
						  <div class="col-sm-12">
						    <img class="sixth_img" src="<?php echo get_option('sh_news_fourth_service_img'); ?>" height="100" style="max-width:100%" />
						    <input class="sixth_img_url sh_half" type="text" name="sh_news_fourth_service_img" size="60" value="<?php echo get_option('sh_news_fourth_service_img'); ?>">
	    				    <input class="sixth_img_id" type="hidden" name="sh_news_fourth_service_img_id" value="<?php echo get_option('sh_news_fourth_service_img_id'); ?>">
						    <a href="#" class="sixth_img_upload btn btn-info">Choose</a>
						  </div>
						</div>						
			        </div>
			        <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
						<div class="form-group">
							<label for="news-second_title" class="col-sm-4 control-label">Second Section title</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" id="news-second_title" name="sh_news_second_title" value="<?php echo get_option('sh_news_second_title'); ?>">
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