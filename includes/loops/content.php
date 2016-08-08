<?php
/*
The Default Loop (used by index.php and category.php)
=====================================================

If you require only post excerpts to be shown in index and category pages, then use the [---more---] line within blog posts.

If you require different templates for different post types, then simply duplicate this template, save the copy as, e.g. "content-aside.php", and modify it the way you like it. (The function-call "get_post_format()" within index.php, category.php and single.php will redirect WordPress to use your custom content template.)

Alternatively, notice that index.php, category.php and single.php have a post_class() function-call that inserts different classes for different post types into the <section> tag (e.g. <section id="" class="format-aside">). Therefore you can simply use e.g. .format-aside {your styles} in css/es-mad.css style the different formats in different ways.
*/
?>
        <section class="container-fluid">
        <div class="noticias">
           <div class="row">

                <?php tha_content_before(); ?>
                <?php tha_content_top(); ?>
                <?php if(have_posts()): while(have_posts()): the_post();?>
                <?php tha_entry_before(); ?>

                <article class="col-sm-4">
                   <ul class="">
                        <li class="thu-content">
                           <a href="<?php the_permalink();?>">
                               <?php if ( has_post_thumbnail() ) { the_post_thumbnail('noticias'); } ?>
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
                       </li>
                        <li class="spam">
                            <strong><?php the_field('fecha_taller'); ?></strong>
                        <li>
                       <li>
                           <strong>
                               <span class="text-muted author"><?php _e('Por:', 'es-mad'); echo " "; the_author() ?>,</span>
                               <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
                            </strong>
                       </li>
                   </ul>
                </article>

               <?php tha_entry_bottom(); ?>
               <?php endwhile; ?>

            </div><!--ROW-->
        </div><!--Noticia-->
                <?php tha_entry_after();?>

                <?php if ( function_exists('es_mad_pagination') ) { es_mad_pagination(); } else if ( is_paged() ) { ?>
                  <ul class="pagination">
                    <li class="older"><?php next_posts_link('<i class="glyphicon glyphicon-arrow-left"></i> ' . __('Previous', 'es-mad')) ?></li>
                    <li class="newer"><?php previous_posts_link(__('Next', 'es-mad') . ' <i class="glyphicon glyphicon-arrow-right"></i>') ?></li>
                  </ul>
                <?php } ?>
                <?php else: ?>
                <h1 class="text-center">No encontramos lo que buscas...</h1>
                <?php endif; ?>
    </section>
