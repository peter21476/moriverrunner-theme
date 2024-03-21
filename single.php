<?php get_header(); ?>

<?php get_template_part('masthead'); ?>

<div class="mo-runner-main-content">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <div class="container mo-runner-main-container mo-runner-post">
            <div class="row">
                <div class="col-xl-2 col-lg-4">
                    <div class="mo-runner-sidebar">
                        <?php if(is_active_sidebar('mo-runner-sidebar')) : ?>
                            <?php dynamic_sidebar('mo-runner-sidebar'); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-8 order-first order-sm-1">
                    <div class="mo-runner-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>

        <?php endwhile; else : ?>
 
        <h2><?php esc_html_e('404 Error', 'phpform'); ?></h2>
                <p><?php esc_html_e('Sorry, content not found', 'phpform'); ?></p>

    <?php endif; ?>
</div>

<?php if (Kirki::get_option('morunner_theme_kirki_fields', 'fairfinder-bottom-checkbox')) : ?>

    <div class="mor-fairfinder-bottom">
        <div class="mor-fairfinder-bottom__background">
            <img src="<?php echo esc_url(Kirki::get_option('morunner_theme_kirki_fields', 'fairfinder_background_image')); ?>" alt="Fairfinder Bckground Image" />
        </div>
        <div class="mor-fairfinder-bottom__overlay"></div>
        <div class="mor-fairfinder-bottom__content">
            <h2><?php echo (Kirki::get_option('morunner_theme_kirki_fields', 'fairfinder_heading')); ?></h2>
            <p><?php echo (Kirki::get_option('morunner_theme_kirki_fields', 'fairfinder_subheading')); ?></p>
            <div class="mor-fairfinder">
                <div id="farefinder"></div>
            </div>
        </div>
    </div>

<?php endif; ?>

<script type="text/javascript" src="https://content.amtrak.com/content/statefarefinder/cdsamtrak/cds.js?id=101&v=1.1&c=farefinder"></script>

<?php get_footer(); ?>
