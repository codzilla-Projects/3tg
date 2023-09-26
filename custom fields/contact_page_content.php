<?php 
function contact_page_content_callback(){
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
				<h1 class="text-center sh-title">Contact Page Content</span></h1>
				<br>
			</header>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a class="nav-link active" id="v-pills-firstsection-tab" data-toggle="pill" href="#v-pills-firstsection" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">Contact Section</a>
			</div>
		</div>
		<div class="col-sm-9 gray_back">
	  		<form class="form-horizontal" method="post" action="#">
			    <div class="tab-content" id="v-pills-tabContent">
			        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
						<div class="form-group">
							<label for="contact-first_title_item1" class="col-sm-4 control-label">Section title</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" id="contact-first_title_item1" name="sh_contact_first_title" value="<?php echo get_option('sh_contact_first_title'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="contact-first_sec_cont" class="col-sm-4 control-label">Section Content</label>
							<div class="col-sm-12">
						    	<?php wp_editor( get_option('sh_contact_first_content'), 'contact-first_sec_cont',  array('textarea_rows'=>5,'textarea_name'=> 'sh_contact_first_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'contact-first_sec_cont','class'=>'form-control',) );  ?>
							</div>
						</div>
						<div class="form-group">
						  <label for="contact-first_img" class="col-sm-4 control-label">section image</label>
						  <div class="col-sm-12">
						    <img class="first_img" src="<?php echo get_option('sh_contact_first_img'); ?>" height="100" style="max-width:100%" />
						    <input class="first_img_url sh_half" type="text" name="sh_contact_first_img" size="60" value="<?php echo get_option('sh_contact_first_img'); ?>">
	    				    <input class="first_img_id" type="hidden" name="sh_contact_first_img_id" value="<?php echo get_option('sh_contact_first_img_id'); ?>">
						    <a href="#" class="first_img_upload btn btn-info">Choose</a>
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