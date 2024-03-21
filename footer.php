<footer class="d-flex flex-column">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="mo-runner-footer__logos">
                    <div class="mo-runner-footer__logo">
                        <img src="<?php echo get_theme_mod('amtrack_bottom_logo'); ?>" alt="Amtrack Logo">
                    </div>
                    <div class="mo-runner-footer__logo">
                        <img src="<?php echo get_theme_mod('morunner_bottom_logo'); ?>" alt="MO Runner Logo">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <?php wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu',
                            'menu_class' => 'footer-menu'
                        )
                ); ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer();  ?>

</body>
</html>