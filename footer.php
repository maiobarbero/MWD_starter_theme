<!-- chiusura col -->
</div>

<?php if(!is_home() and is_active_sidebar('sidebar-right')){?>
<aside class="col-lg-3 flex-end">
    <?php get_sidebar('right'); ?>
</aside>
<?php } ?>

<!-- chiusura row -->
</div>
</main>
<div class="to__top">
    <div class="top__btn text-center">
        <i class="fas fa-rocket"></i>
    </div>
    <p class="rocket__text">To Top</p>
</div>


<!-- Footer -->
<footer class="mt-5 pt-5 pb-5">
    <div class="container">
        <?php get_template_part('inc/template_footer_sidebar'); ?>
        <div class="row mt-3 ">
            <h4 class="text-center text-white footer__title">MWD</h4>
            <?php
                wp_nav_menu(array(
                  'theme_location' => 'footer',
                  'container' => false,
                  'items_wrap' => '<ul class="footer__menu">%3$s</ul>'
                ));?>
        </div>
        <div class="row mt-3">
            <div class="col-lg-12 credits text-center">
                <p class="text-white">
                    <?php esc_html_e('&copy; Copyright ', 'mwd'); ?> <?php echo date("o");?>
                    <?php echo get_bloginfo('name'); ?> &nbsp;|&nbsp;
                    <?php echo get_bloginfo('description'); ?> &nbsp;|&nbsp;
                    <a href="<?php echo esc_url(home_url('/')); ?>privacy-policy/" class="text-white">Privacy
                        Policy</a> &nbsp;|&nbsp;
                    <a href="mailto:<?php echo get_bloginfo('admin_email'); ?>"
                        class="text-white"><?php echo get_bloginfo('admin_email'); ?></a>
                </p>
            </div>
            <?php get_template_part('inc/credits/credits'); ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>


</html>