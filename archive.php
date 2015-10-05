<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<?php if( have_posts() ){ ?>

				<p class="subtitle">
					<?php
						if(is_category()){
							echo "This is a category page : "; single_cat_title();
						} else if(is_author()){
							echo "This is a page author : " . get_the_author(); 
						} else if(is_tag()){
							echo "This is a page tag : "; single_tag_title();
						} else {
							echo "This is a page archive";
						}
					?>
				</p>

				<?php
					while( have_posts() ){ the_post();
						get_template_part('content');
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