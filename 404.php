<?php get_header(); ?>
<main class="main-content col-xs-12">
    <div class="breadcrum col-xs-12">
        <div class="container">
            <ul>
                <li>
                    <a href="<?php bloginfo('url'); ?>">
                        <i class="fa fa-home"></i>
                        home
                    </a>
                </li>
                <li>
                    Page Not Found
                </li>
            </ul>
        </div>
    </div>
    <div class="plat-inner col-xs-12 pad-bot100">
    	<div class="container">
            <h1 class="text-center">404 - Page Not Found</h1>
            <p>Search here:</p>
            <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
                <input type="search" class="form-control" placeholder="search here..." value="<?php echo get_search_query(); ?>" name="s">
            </form>

    	</div>
    </div>
</main>
<?php get_footer(); ?>