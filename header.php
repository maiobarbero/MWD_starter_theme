<!DOCTYPE html>
<html lang="<?php language_attributes();?>  " <head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php  bloginfo('title');  ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-theme="light">
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><i
                        class="fas fa-quote-right text-white me-1"></i><?php bloginfo('name'); ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="navbar-toggler-icon fas fa-ellipsis-v text-white"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'header',
                            'depth' => 2,
                            'container' => false,
                            'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                            'add_li_class'  => 'nav-item dropdown',
                            'link_class'   => 'nav-link',
                            'walker' => new wp_bootstrap_navwalker()
                        )); 
                    ?>
                    <span class="navbar-text">
                        <div class="form-check form-switch" id="switch-div">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault"><i
                                    class="fas fa-moon"></i></label>
                        </div>
                    </span>
                </div>

            </div>
        </nav>
    </header>
    <?php if(is_home() && is_front_page()){ ?>
    <div class="jumbotron"
        style="background:url(<?php header_image();?>);background-size:cover;background-position:center;">
        <div class="captation">
            <h1 class="text-white ps-5 pt-5 fw-bold"><?php bloginfo('title');  ?></h1>
            <p class=" text-white  ps-5 lh-lg fs-3 "><?php bloginfo( 'description' ); ?></p>
            <hr class="my-4 mx-5 white">
            <p class="text-white ps-5 lh-lg fs-4 lead">Un completo starter theme per Wordpress</p>
            <a class="btn primary-bg btn-lg ms-5 text-white pop" href="#" role="button">MWD</a>
        </div>
    </div>

    <?php } ?>
    <main class="container pt-5">
        <div class="row">
            <?php
            if (is_home()) {
                $col = "col-lg-12";
            } else if (!is_active_sidebar('sidebar-right') and !is_active_sidebar('sidebar-left')){
                $col = "col-lg-12";
            }else if (is_active_sidebar('sidebar-right') and is_active_sidebar('sidebar-left')){
                $col = "col-lg-6";
            } else {
                $col = "col-lg-9";
            }
            ?>
            <?php if(!is_home() and is_active_sidebar('sidebar-left')){?>
            <aside class="col-lg-3 flex-start">
                <?php get_sidebar('left'); ?>
            </aside>
            <?php } ?>
            <div class="<?php echo $col; ?>">