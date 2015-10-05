<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
	<div class="form-group">
	    <input class="form-control floating-label" id="focusedInput" type="text" placeholder="Entry keyword..." value="<?php echo get_search_query() ?>" name="s">
	</div>
</form>
<a href="<?php echo home_url('/blog');?>" class="btn btn-flat btn-primary">Go To Blog</a>