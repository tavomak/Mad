<?php get_template_part('includes/header'); ?>
<div id="preloader">Loading...</div>
<div class="container">
  <div class="row">
    
    <div class="col-xs-12 col-sm-9">
      <div id="content" role="main">
        <?php tha_content_before(); ?>
        <div class="alert alert-warning">
          <h1><i class="glyphicon glyphicon-warning-sign"></i> <?php _e('Error', 'es-mad'); ?>404</h1>
          <p><?php _e('No encontramos la información que buscas.', 'es-mad'); ?></p>
        </div>
      </div><!-- /#content -->
    </div>
    
    <div class="col-xs-6 col-sm-3" id="sidebar" role="navigation">
       <?php get_template_part('includes/sidebar'); ?>
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->
<hr>
<?php get_template_part('includes/subfooter'); ?>
<?php get_template_part('includes/footer'); ?>
