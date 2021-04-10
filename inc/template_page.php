<?php if(has_post_thumbnail()){ ?>
<div class="hero hero__filter text-center mb-5"
    style='background: url(<?php echo the_post_thumbnail_url();?>) center center; background-size: cover;'>
    <h1 class="text-white z1"><?php the_title(); ?></h1>
</div>
<?php }else{ ?>

<div class="hero__small text-center mb-5">

    <h1><?php the_title(); ?></h1>
</div>
<?php }; ?>

<?php the_content(); ?>