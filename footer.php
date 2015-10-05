	<footer class="page-footer">
		<div class="container">
            <div class="row">
              <div class="col l6 s12">
                
              </div>
              <div class="col l4 offset-l2 s12">
                
              </div>
            </div>
          </div>
		<div class="footer-copyright">
	        <div class="container">

	            
	            <blockquote class="pull-right">
		            <?php 
						$args = array('theme_location' => 'menu_footer');
						wp_nav_menu($args);
					?>
				</blockquote>

				<blockquote class="pull-left">
					<b>Kang-cahya</b> &copy; <?php bloginfo("name"); echo " - ".date("Y"); ?>
				</blockquote>
	        </div>
	    </div>
    </footer>
	<?php wp_footer();?>
</body>
</html>