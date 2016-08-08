<?php
/*
Template Name: Repetidor
*/
?>
<?php get_template_part('includes/header'); ?>
<div id="preloader">Loading...</div>

        <?php tha_content_before(); ?>
        <?php tha_content_top(); ?>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>

        <?php tha_entry_before(); ?>
        <div class="container-fluid single-img">
            <div class="wrap-title">
                <div class="img-title">
                    <p><?php the_content();?></p>
                </div>
            </div>
            <div class="img-bg">
                <?php the_post_thumbnail('large-mad'); ?>
            </div>
        </div>

        <section class="container">
            <h2><?php the_title()?></h2>
            <hr>
            <?php
            // check if the repeater field has rows of data
            if( have_rows('repetidor') ):
                // loop through the rows of data
                while ( have_rows('repetidor') ) : the_row();

                    $image = get_sub_field('imagen-rep');

                ?>
                <article class="mad-rep">
                    <ul class="row">
                        <li class="col-sm-4">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" >
                        </li>
                        <li class="col-sm-8">
                            <h3><?php the_sub_field('titulo-rep'); ?></h3>
                            <p><?php the_sub_field('contenido-rep'); ?></p>
                        </li>
                    </ul>
                    <hr>
                </article>
                <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>


        <?php tha_entry_bottom(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php tha_entry_after(); ?>



        <?php// else: wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; endif; ?>

        </section><!-- /.container -->
<hr>
<?php get_template_part('includes/subfooter'); ?>
<?php get_template_part('includes/footer'); ?>
