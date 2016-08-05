<?php get_template_part('includes/header'); ?>
        <div id="preloader">...</div><!-- loading -->
        <?php get_template_part('includes/slideshow'); ?>
        <!--
        <hr>
           <section class="container-fluid">
            <div class="container">
                <h3>Espacio MAD trabaja con artistas que mediante su trabajo, pueden efectivamente hacer un cambio significativo de nuestra sociedad, através de la provocación directa y confrontación simbólica.</h3>
            </div>
        </section>
        <hr>
        -->
        <section class="container-fluid main-noticias">
            <div class=" container noticias">
               <div class="row section-title">
                    <h1 >NOTICIAS</h1>
                    <small>Te mantenemos informado del mundo del arte We keed you inform of the art world </small>
               </div>
                <div class="row">
                    <?php
                    $wp_query = new WP_Query(array('category_name'=>'mad-noticas' ,'showposts'=>3));
                    while($wp_query->have_posts()):
                    $wp_query->the_post();
                    $do_not_duplicate = $post->ID; ?>

                    <article class="col-sm-4">
                       <ul class="">
                            <li class="thu-content">
                               <a href="<?php the_permalink();?>">
                                   <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                                    <div class="clip-mask"></div>
                               </a>
                            </li>
                            <li>
                               <a href="<?php the_permalink();?>">
                                    <h3><?php echo the_title();?></h3>
                                </a>
                            </li>
                            <li>
                                <p><?php echo get_the_excerpt();?></p>
                               <hr>
                           </li>
                           <li>
                               <strong>
                                   <span class="text-muted author"><?php _e('Por:', 'es-mad'); echo " "; the_author() ?>,</span>
                                   <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
                                </strong>
                           </li>
                       </ul>
                    </article>

                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>

                </div>
            </div><!-- NOTICIAS -->
            <hr>
        </section>
        <section class="container-fluid main-talleres">
           <div class="container talleres">
               <div class="row section-title">
                    <h1 >TALLERES</h1>
                    <small>Te mantenemos informado del mundo del arte We keed you inform of the art world </small>
               </div>
               <div class="row">
                    <?php
                    $wp_query = new WP_Query(array('category_name'=>'mad-talleres' ,'showposts'=>3));
                    while($wp_query->have_posts()):
                    $wp_query->the_post();
                    $do_not_duplicate = $post->ID;  ?>

                    <article class="col-sm-4">
                       <ul class="">
                            <li class="thu-content">
                               <a href="<?php the_permalink();?>">
                                   <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                                    <div class="clip-mask"></div>
                               </a>
                            </li>
                            <li>
                                <a href="<?php the_permalink();?>">
                                    <h3><?php echo the_title();?></h3>
                                </a>
                            </li>
                            <li>
                                <p><?php echo get_the_excerpt();?></p></li>
                           <li class="spam">
                                <strong><?php the_field('fecha_taller'); ?></strong>
                           <li>
                       </ul>
                    </article>

                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>

                </div>

           </div><!-- TALLERES -->
        </section>
        <hr>
        <?php get_template_part('includes/subfooter'); ?>
<?php get_template_part('includes/footer'); ?>
