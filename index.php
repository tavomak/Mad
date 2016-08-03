<?php get_template_part('includes/header'); ?>
        <div id="preloader">...</div><!-- loading -->

        <?php get_template_part('includes/slideshow'); ?>
        <hr>
        <section class="container-fluid main-noticias">
            <div class=" container noticias">
                <h1 class="text-center">Noticias</h1>

                <ul class="row">
                    <?php
                    $wp_query = new WP_Query(array('category_name'=>'mad-noticas' ,'showposts'=>3));
                    while($wp_query->have_posts()):
                    $wp_query->the_post();
                    $do_not_duplicate = $post->ID; ?>

                    <li class="col-sm-4">
                       <ul class="list-inline">
                            <li class="loop-img">
                                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                            </li>
                            <li>
                                <h2><?php echo the_title();?></h2>
                            </li>
                       </ul>
                        <p><?php echo get_the_excerpt();?></p>
                    </li>

                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>

                </ul>
            </div><!-- NOTICIAS -->
        </section>
        <hr>
        <section class="container-fluid main-talleres">
           <div class="container noticias">

            <h1 class="text-center">Talleres</h1>
            <ul class="row">
                <?php
                $wp_query = new WP_Query(array('category_name'=>'mad-talleres' ,'showposts'=>3));
                while($wp_query->have_posts()):
                $wp_query->the_post();
                $do_not_duplicate = $post->ID;  ?>

                <li class="col-sm-4">
                   <ul class="list-inline">
                        <li class="loop-img">
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                        </li>
                        <li>
                            <h2><?php echo the_title();?></h2>
                        </li>
                    </ul>
                    <p><?php echo get_the_excerpt();?></p>
                </li>

                <?php endwhile; ?>
                <?php wp_reset_query(); ?>

            </ul>

           </div><!-- TALLERES -->
        </section>
        <hr>
        <?php get_template_part('includes/subfooter'); ?>
<?php get_template_part('includes/footer'); ?>
