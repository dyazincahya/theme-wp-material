<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<?php
				if( have_posts() ){
			?>
				<?php
					while( have_posts() ){ the_post();
						get_template_part('content', get_post_format());
					}
		 		?>

				<blockquote class="pull-left"><?php previous_posts_link(); ?></blockquote>

				<blockquote class="pull-right"><?php next_posts_link(); ?></blockquote>

			<?php
				} else {
					echo "Tidak ada post";
				}
			?>
		</div>
		<div class="col-md-3">
			<?php dynamic_sidebar("sidebar_right");?>
		</div>
	</div>
</div>
<?php get_footer(); ?>