<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo Kirki::get_option('morunner_theme_kirki_fields', 'morunner_favicon') ?>">
    <title><?php bloginfo('name'); ?> - <?php single_post_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-4 my-auto">
                <a href="<?php echo Kirki::get_option('morunner_theme_kirki_fields', 'amtrak_link'); ?>"><img class="amtrack-top-logo" src="<?php echo Kirki::get_option('morunner_theme_kirki_fields', 'amtrack_top_logo') ?>" alt="logo" /></a>
                </div>
                <div class="col-md-4 col-4 my-auto">
                <a href="<?php echo home_url(); ?>"><img class="morunner-top-logo" src="<?php echo Kirki::get_option('morunner_theme_kirki_fields', 'morunner_top_logo') ?>" alt="logo" /></a>
                </div>
                <div class="col-md-4 col-4 my-auto">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'top-menu',
                            'menu_class' => 'top-menu'
                        )
                    ); ?>
                    <div class="morunner-mobile-trigger">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>