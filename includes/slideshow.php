           <section id="carousel-1" data-ride="carousel" class="carousel slide">
        <div role="listbox" class="carousel-inner">
            <?php
            $wp_query = new WP_Query(array('category_slug' => array( 'aciform', 'years'),'posts_per_page'=>5));
            while($wp_query->have_posts()):
            $wp_query->the_post();?>
                <div class="item">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                    <h2><?php echo the_title();?></h2>
                    <p><?php echo get_the_excerpt();?></p>
                    <a href="<?php the_permalink();?>" class="button">Ver más</a>

                </div>
            <?php endwhile; ?>
        </div>
        <!-- carousel-inner
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a> -->
        <ol class="carousel-indicators">
            <?php while(have_posts()): the_post(); ?>
                <li data-target="#carousel-1" data-slide-to="<?php echo $number++; ?>"></li>
            <?php endwhile; ?>
        </ol>
    <?php wp_reset_query(); ?>

    </section>
