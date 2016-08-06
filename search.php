<?php get_template_part('includes/header'); ?>

<div class="container">
  <div class="row">
    
    <div class="col-xs-8 col-sm-9">
      <div id="content" role="main">
        <?php tha_content_before(); ?>
        <h2><?php _e('Search Results for', 'es-mad'); ?> &ldquo;<?php the_search_query(); ?>&rdquo;</h2>
        <hr/>
        <?php get_template_part('includes/loops/content', 'search'); ?>
      </div><!-- /#content -->
    </div>
    
    <div class="col-xs-4 col-sm-3" id="sidebar" role="navigation">
        <?php get_template_part('includes/sidebar'); ?>
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->
<hr>
<?php get_template_part('includes/subfooter'); ?>
<?php get_template_part('includes/footer'); ?>
