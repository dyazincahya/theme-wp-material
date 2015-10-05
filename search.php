<?php get_header(); ?>
<div class="container">
	<?php if( have_posts() ){ ?>
		<div class="jumbotron" style="text-align:center;">
			<h2><i class="mdi-action-search"></i> SEARCH</h2>
			<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
				<div class="form-group">
				    <input class="form-control floating-label" id="focusedInput" type="text" placeholder="Entry keyword..." value="<?php echo get_search_query() ?>" name="s">
				</div>
			</form>
		</div>
	<?php
			while( have_posts() ){ the_post();
				if($post->post_type == "page") continue;
				get_template_part('content');
			}
		} else {
	?>
		<div class="jumbotron" style="text-align:center;">
			<h2><i class="mdi-action-search"></i> SEARCH</h2>
			<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
				<div class="form-group">
				    <input class="form-control floating-label" id="focusedInput" type="text" placeholder="Entry keyword..." value="<?php echo get_search_query() ?>" name="s">
				</div>
			</form>
		</div>

		<div class="jumbotron" style="text-align:center;">
			<p><i class="mdi-action-room"></i> Not Found</p>
		</div>

		<div class="jumbotron">
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
						    <h3 class="panel-title">Recent Posts</h3>
						</div>
						<div class="panel-body">
							<?php
								$query = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => '3') );
								while( $query->have_posts() ){ $query->the_post();
							?>
								<div class="list-group">
								    <div class="list-group-item">
								        <div class="row-action-primary">
								            <i class="mdi-file-folder"></i>
								        </div>
								        <div class="row-content">
								            <h4 class="list-group-item-heading"><?php the_title();?></h4>
								            <i class="list-group-item-text"><?php echo get_the_excerpt(); ?></i>
								        </div>
								    </div>
								    <div class="list-group-separator"></div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-success">
						<div class="panel-heading">
						    <h3 class="panel-title">Pages</h3>
						</div>
						<div class="panel-body"><ul>
							<?php
								$query = new WP_Query( array( 
									'post_type' => 'page', 
									'post_status' => 'publish', 
									'orderby' => 'name', 
									'order' => 'ASC'
								) );
								while( $query->have_posts() ){ $query->the_post();
							?>
								<li><a href="<?php the_permalink();?>" class="list-group-item-heading"><?php the_title();?></a></li>
							<?php } ?>
						</ul></div>
					</div><br>
					<div class="panel panel-danger">
						<div class="panel-heading">
						    <h3 class="panel-title">Category</h3>
						</div>
						<div class="panel-body"><ul>
							<?php
								$args = array( 'orderby' => 'name', 'order' => 'ASC' );
								$categories = get_categories($args);
								foreach($categories as $category) { 
							    	echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </li> ';
								}
							?>
						</ul></div>
					</div>
				</div>
			</div>
		</div>
	<?php }	?>
</div>
<?php get_footer(); ?>