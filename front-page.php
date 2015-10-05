<!DOCTYPE html>
<html>
<head>
  <title>
    <?php bloginfo('description'); ?> — <?php bloginfo('name');?>
  </title>
  <?php wp_head();?>
  <style type="text/css">
    p{color:#FFFFFF;}
    p a{color:#FFFFFF;font-weight:bold;}
  </style>
</head>
<body background="<?php echo get_stylesheet_directory_uri();?>/images/front-background.jpg">
  <div class="container" style="margin-top:100px;text-align:center;">
    <h1 style="padding:20px;"><?php bloginfo('name');?></h1>
    <div class="jumbotron" style="text-align:center;">
      <?php get_search_form();?>
    </div>
    <p style="color:#FFFFFF;">
      <a href="" style="color:#FFFFFF;">Kang-cahya</a> . 
      <a href="" style="color:#FFFFFF;">CDO</a> . 
      2015 . 
      <a href="" style="color:#FFFFFF;">Wordpress</a>
    </p>
  </div>

  <footer class="page-footer">
  </footer>
  <?php wp_footer();?>
</body>
</html>