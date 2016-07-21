    <section id="carousel-1" data-ride="carousel" class="carousel slide">
        <div role="listbox" class="carousel-inner">

               <?php if(have_posts()): while(have_posts()): the_post();?>
                <div class="item">
                    <div class="helper"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></div>
                    <div class="caption">

                        <h2><?php echo the_title();?></h2>
                        <p>
                            <?php echo get_the_excerpt();?>
                        </p>
                        <a href="<?php the_permalink();?>" class="button">Ver más</a>
                        <hr class="visible-xs">
                    </div>
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
