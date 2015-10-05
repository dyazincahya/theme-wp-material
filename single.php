<?php get_header(); ?>
<div class="container">

	<div class="row">
		<div class="col-md-9">
			<div class="jumbotron">
				<?php
					if( have_posts() ){
						while( have_posts() ){ the_post();
							get_template_part('content', get_post_format() );
						}
					} else {
						echo "Tidak ada post";
					}
				?>
					
				<?php comments_template(); ?>
			</div>
		</div>
		<div class="col-md-3">
			<?php dynamic_sidebar("single_page_right");?>
		</div>
	</div>
</div>

<div class="clear"></div>
<?php get_footer(); ?>