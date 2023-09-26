<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
    <input type="search" class="form-control" placeholder="search here..." value="<?php echo get_search_query(); ?>" name="s">
    <button type="button" class="cl-search">
        <i class="fa fa-close"></i>
    </button>
</form>
