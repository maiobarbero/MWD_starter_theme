<article class="col col-xl-3">
    <div class="card my-3 mx-3 shadow" style="width: 18rem;">
        <?php if(has_post_thumbnail()){ ?>
        <div class="card__img__container">
            <img src="<?php echo the_post_thumbnail_url();?>" class="card-img-top rounded" alt="<?php the_title(); ?>">
        </div>
        <?php }else{ ?>
        <div class="card__img__container">
            <div class="card-img-top rounded noimg">
                <i class="fas fa-quote-right text-white logo__mwd"></i>
                <h4 class="text-white">MWD</h4>
            </div>
        </div>
        <?php } ?>
        <div class="card-body">
            <a href="<?php the_permalink(); ?>">
                <h5 class="card-title"><?php the_title(); ?></h5>
            </a>
            <p class="text-muted"><?php the_time('j F Y'); ?> </p>

        </div>
    </div>
</article>