<?php get_template_part('includes/header'); ?>
<div id="preloader">...</div>
<hr>
<div class="container">
  <div class="row">
    <div class="">
      <div id="content" role="main">
       <p>sjgksg</p>
        <?php tha_content_before(); ?>
        <div class="woocommerce">
            <?php woocommerce_content(); ?>
        </div>
      </div><!-- /#content -->
    </div>

  </div><!-- /.row -->
</div><!-- /.container -->
<hr>
<?php get_template_part('includes/subfooter'); ?>
<?php get_template_part('includes/footer'); ?>
