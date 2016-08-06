<?php
/*
The Search Loop
===============
*/
?>
<?php tha_content_before(); ?>
<?php tha_content_top(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<?php tha_entry_before(); ?>
    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
        <section>
        	<?php tha_entry_top(); ?>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h4>
        </section>
      <?php the_excerpt(); ?>
    </article>
    <?php tha_entry_bottom(); ?>
<?php endwhile; else: ?>
	<?php tha_entry_after(); ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
