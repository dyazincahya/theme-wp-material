<?php if( is_single() ){?>
	<h2><?php the_title(); ?></h2>
	<div class="well well-sm">
		<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a>
		<?php 
			echo " | ";
			the_time('d/m/Y'); echo " <b>at</b> "; the_time('H:i a'); echo " | ";
			the_category(', '); echo " | ";
			comments_popup_link( '<span>' . __( 'No Comment', 'doc' ) . '</span>', __( '1 Comment', 'doc' ), __( '% Comments', 'doc' ) );
		?>
	</div>
	<?php the_post_thumbnail("big_thumb"); ?>
	<div class="content-single"><?php the_content(); ?></div>
	<div class="alert alert-default"><?php the_tags('Tags : ',', ','');?></div>

<?php } else if( is_page() ){ ?>
	<div class="jumbotron">
		<h2><?php the_title(); ?></h2>
		<?php the_post_thumbnail("big_thumb"); ?>
		<div class="content-single"><?php the_content(); ?></div>
	</div>
<?php } else { ?>
	<div class="jumbotron">
		<div class="row">
			<div class="col-md-3">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail("small_thumb");
				} else { ?>
					<img src="<?php bloginfo('template_directory'); ?>/images/no_img.png" height="150" />
				<?php } ?>
	    	</div>
	    	<div class="col-md-9">
	      		<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
	      		<a href="#"><?php comments_popup_link( '<span>' . __( 'No Comment', 'doc' ) . '</span>', __( '1 Comment', 'doc' ), __( '% Comments', 'doc' ) ); ?> </a> . 
	      		<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a> . 
	      		<?php echo the_time('d/m/Y');?> 
	      		<?php echo the_time('H:i a'); ?>
				<p><?php echo get_the_excerpt(); ?></p>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<a href="#" data-toggle="modal" data-target="#share">Share It</a>
			            <div id="share" class="modal fade" tabindex="-1" style="padding-top:100px;">
			                <div class="modal-dialog">
			                  	<div class="modal-content">
			                    	<div class="modal-header">
			                      		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                      		<h4 class="modal-title">Share Now</h4>
			                    	</div>
				                    <div class="modal-body" align="center">
				                      	<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" class="btn btn-primary btn-lg" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
										<a href="https://plus.google.com/share?url=<?php the_permalink();?>" class="btn btn-danger btn-lg" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a>
										<a href="http://twitter.com/share?url=<?php the_permalink();?>" class="btn btn-info btn-lg" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
				                    </div>
			                  	</div>
			                </div>
			            </div>
					</div>
					<div class="col-md-6" align="right">
			      		<?php the_category(', '); ?>
					</div>
				</div>
	    	</div>
	  	</div>
	</div>
<?php } ?>