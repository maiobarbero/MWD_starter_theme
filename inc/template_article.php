<article class="post">


    <?php mwd_bootstrap_breadcrumb(); ?>


    <h2><?php the_title(); ?></h2>



    <p class="post-info text-muted">
        <?php the_time('j F Y - g:i a'); ?> |
        Autore: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> |
        Categoria:
        <?php get_template_part('inc/template_category'); ?> |
        Tags:
        <?php the_tags('', ', ', ''); ?>
    </p>



    <?php if(has_post_thumbnail()){ ?>
    <div class=" hero text-center mb-5"
        style='background:url(<?php echo the_post_thumbnail_url();?>) center center; background-size: cover;'>
    </div>
    <?php }else{ ?>
    <div class="hero__small text-center mb-5">
        <h2><?php the_title(); ?></h2>
    </div>
    <?php }; ?>



    <?php the_content(); ?>




    <!-- Commenti -->
    <?php comments_template(); ?>



</article>