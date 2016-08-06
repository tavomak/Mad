<?php get_template_part('includes/header'); ?>
<div id="preloader">Loading...</div>
        <div class="section-title container">
            <h1><?php echo single_cat_title(); ?></h1>
       </div>
    <hr>
<div class="container">
  <div class="row">
    <div class="">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/content', get_post_format()); ?>
      </div><!-- /#content -->
    </div>

  </div><!-- /.row -->
</div><!-- /.container -->
<hr>
<?php get_template_part('includes/subfooter'); ?>
<?php get_template_part('includes/footer'); ?>
