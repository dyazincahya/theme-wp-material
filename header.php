<!DOCTYPE html>
<html>
<head>
	<title>
		<?php
			if (is_single() || is_page()) {
				wp_title('',true); 
			} else { 
				bloginfo('description'); 
			} 
		?> — 
		<?php bloginfo('name');?>
	</title>
	<?php wp_head();?>
</head>
<body><?php// get_search_form();?>
	<div class="navbar navbar-inverse">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo home_url();?>"><?php bloginfo("name");?></a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
            <?php 
				$args = array(
					'items_wrap'      => '<ul class="nav navbar-nav">%3$s',
					'theme_location' => 'main_menu'
				);
				wp_nav_menu($args);
			?>
            <form class="navbar-form navbar-right" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
                <input type="text" class="form-control col-lg-8" placeholder="Search"  value="<?php echo get_search_query() ?>" name="s">
            </form>
        </div>
    </div>
 	