    <section class="primary-slide">
        <div id="carousel-1" data-ride="carousel" class="carousel slide">

            <div role="listbox" class="carousel-inner">
                <?php
                $wp_query = new WP_Query(array('post_type' => array( 'post' ),'posts_per_page'=>5));
                query_posts($query_string .'&cat=-185,-186');
                while($wp_query->have_posts()):
                $wp_query->the_post();
                $do_not_duplicate = $post->ID; ?>

                <div class="item">
                    <div class="carousel-caption">
                       <a href="<?php the_permalink();?>" class="button">
                           <h2 class="toggleHeading"><?php echo the_title();?></h2>
                           <hr class="toggleCaption  visible-sm visible-md visible-lg">
                           <p class="toggleCaption  visible-sm visible-md visible-lg"><?php echo get_the_excerpt();?></p>
                        </a>
                    </div>
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail('large'); } ?>
                </div>

                <?php endwhile; ?>

            </div><!-- carousel-inner-->

            <!-- carousel-control
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
            -->

            <ol class="carousel-indicators">
                <?php while(have_posts()): the_post(); ?>
                    <li data-target="#carousel-1" data-slide-to="<?php echo $number++; ?>"></li>
                <?php endwhile; ?>
            </ol><!-- carousel-indicators-->

        </div><!-- carousel -->

        <?php wp_reset_query(); ?>

    </section>
