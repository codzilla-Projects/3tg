<?php 
function partners_page_content_callback(){
	$wp_editor_settings = array( 
		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue
		'textarea_rows'=> 2
	);    
	if( isset( $_POST['sh_save'] ) && !empty( $_POST['sh_save']) ){
		foreach ($_POST as $key => $value) {
			if(in_array($key,['sh_part_first_content','sh_part_second_content','sh_part_third_content'])){
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
				<h1 class="text-center sh-title">Clients Page Content</span></h1>
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
			</div>
		</div>
		<div class="col-sm-9 gray_back">
	  		<form class="form-horizontal" method="post" action="#">
			    <div class="tab-content" id="v-pills-tabContent">
			        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
						<div class="form-group">
							<label for="part-first_sec_title" class="col-sm-4 control-label">First section title</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" id="part-first_sec_title" name="sh_part_first_title" value="<?php echo get_option('sh_part_first_title'); ?>">
							</div>
						</div>						
						<div class="form-group">
							<label for="part-first_sec_cont" class="col-sm-4 control-label">First Section Content</label>
							<div class="col-sm-12">
						    	<?php wp_editor( get_option('sh_part_first_content'), 'part-first_sec_cont',  array('textarea_rows'=>5,'textarea_name'=> 'sh_part_first_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'part-first_sec_cont','class'=>'form-control',) );  ?>
							</div>
						</div>
			        </div>
			        <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
						<div class="form-group">
							<label for="part-second_sec_cont" class="col-sm-4 control-label">Second Section Content</label>
							<div class="col-sm-12">
						    	<?php wp_editor( get_option('sh_part_second_content'), 'part-second_sec_cont',  array('textarea_rows'=>5,'textarea_name'=> 'sh_part_second_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'part-second_sec_cont','class'=>'form-control',) );  ?>
							</div>
						</div>
				    </div>	      
				    <div class="tab-pane fade" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">
						<div class="form-group">
							<label for="part-third_sec_title" class="col-sm-4 control-label">Third section title</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" id="part-third_sec_title" name="sh_part_third_title" value="<?php echo get_option('sh_part_third_title'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="part-third_sec_cont" class="col-sm-4 control-label">Third Section Content</label>
							<div class="col-sm-12">
						    	<?php wp_editor( get_option('sh_part_third_content'), 'part-third_sec_cont',  array('textarea_rows'=>5,'textarea_name'=> 'sh_part_third_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'part-third_sec_cont','class'=>'form-control',) );  ?>
							</div>
						</div>
						<div class="form-group sh_half fleft">
							<label for="third_sec_btn_text" class="col-sm-6 control-label">Third button text</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="third_sec_btn_text" name="sh_part_third_btn_text" value="<?php echo get_option('sh_part_third_btn_text'); ?>">
							</div>
						</div>	
						<div class="form-group sh_half fright">
							<label for="third_sec_btn_link" class="col-sm-6 control-label">Third button link</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="third_sec_btn_link"  name="sh_part_third_btn_link" value="<?php echo get_option('sh_part_third_btn_link'); ?>">
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