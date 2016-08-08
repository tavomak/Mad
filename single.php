<?php get_template_part('includes/header'); ?>
<div id="preloader">Loading...</div>
       <article class="single">

            <?php tha_content_before(); ?>
            <?php tha_content_top(); ?>
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php tha_entry_before(); ?>

            <div class="container-fluid single-img">
               <div class="wrap-title">
                    <div class="img-title">
                        <h2><?php the_title(); ?></h2>
                        <hr>
                        <p><?php the_excerpt();?></p>
                    </div>
               </div>
                <div class="img-bg">
                    <?php the_post_thumbnail('large-mad'); ?>
                </div>
            </div>
            <?php tha_entry_top(); ?>
            <div class="container single-content">
                <section class="col-sm-9">
                   <h2><?php the_title()?></h2>
                    <?php the_content()?>
                    <?php wp_link_pages(); ?>
                </section>
                <?php tha_entry_bottom(); ?>
                <section id="sidebar" role="navigation" class="col-sm-3 single-sidebar">
                    <?php get_template_part('includes/sidebar'); ?>
                </section>
            </div>

        </article>
        <hr>
        <?php get_template_part('includes/loops/reciente'); ?>
        <hr>
        <div class="container">
           <div class="row">
               <div class="col-sm-9 comentarios">
                    <?php comments_template('/includes/loops/comments.php'); ?>
               </div>
           </div>
        </div>
        <?php tha_entry_bottom(); ?>
        <?php endwhile; ?>
        <?php tha_entry_after(); ?>
        <?php else: wp_redirect(get_bloginfo('siteurl').'/404', 404); exit;?>
        <?php endif; ?>


<hr>

<?php get_template_part('includes/subfooter'); ?>
<?php get_template_part('includes/footer'); ?>
