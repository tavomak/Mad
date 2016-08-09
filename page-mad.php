<?php
/*
Template Name: Mad
*/
?>
<?php get_template_part('includes/header'); ?>
<div id="preloader">Loading...</div>
<hr>
<div class="container">
  <div class="row">

    <div class="col-md-7 col-md-offset-3">
        <div id="content" role="main">
        <?php tha_content_before(); ?>
        <?php get_template_part('includes/loops/content', 'page'); ?>
        </div><!-- /#content -->
    </div>

  </div><!-- /.row -->
</div><!-- /.container -->
<hr>
<?php get_template_part('includes/subfooter'); ?>
<?php get_template_part('includes/footer'); ?>
