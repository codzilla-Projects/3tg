<?php 
function sales_page_content_callback(){
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
				<h1 class="text-center sh-title">Sales Page Content</span></h1>
				<br>
			</header>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a class="nav-link active" id="v-pills-firstsection-tab" data-toggle="pill" href="#v-pills-firstsection" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">First Section</a>
				<a class="nav-link" id="v-pills-secondsection-tab" data-toggle="pill" href="#v-pills-secondsection" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">Second Section</a>
			</div>
		</div>
		<div class="col-sm-9 gray_back">
	  		<form class="form-horizontal" method="post" action="#">
			    <div class="tab-content" id="v-pills-tabContent">
			        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
						<div class="form-group">
							<label for="sale-first_sec_title" class="col-sm-4 control-label">First section title</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" id="sale-first_sec_title" name="sh_sale_first_title" value="<?php echo get_option('sh_sale_first_title'); ?>">
							</div>
						</div>
			        </div>
			        <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
						<div class="form-group">
							<label for="sale-second_sec_title" class="col-sm-4 control-label">Second section title</label>
							<div class="col-sm-12">
							<input type="text" class="form-control" id="sale-second_sec_title" name="sh_sale_second_title" value="<?php echo get_option('sh_sale_second_title'); ?>">
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