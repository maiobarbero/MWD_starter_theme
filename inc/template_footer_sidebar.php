<div class="row footer__sidebar">
    <?php if (is_active_sidebar('footer1')) : ?>
    <div class="col-lg-3">
        <?php dynamic_sidebar('footer1'); ?>
    </div>
    <?php endif; ?>

    <?php if (is_active_sidebar('footer2')) : ?>
    <div class="col-lg-3">
        <?php dynamic_sidebar('footer2'); ?>
    </div>
    <?php endif; ?>

    <?php if (is_active_sidebar('footer3')) : ?>
    <div class="col-lg-3">
        <?php dynamic_sidebar('footer3'); ?>
    </div>
    <?php endif; ?>

    <?php if (is_active_sidebar('footer4')) : ?>
    <div class="col-lg-3">
        <?php dynamic_sidebar('footer4'); ?>
    </div>
    <?php endif; ?>
</div>