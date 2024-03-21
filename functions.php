<?php

//Load CSS
function loadCSS() {
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');

    // wp_register_style('splide-style', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css');
    // wp_enqueue_style('splide-style');

    wp_register_style('aos-animation', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    wp_enqueue_style('aos-animation');

    wp_register_style('swiffy-style', 'https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css');
    wp_enqueue_style('swiffy-style');
}
add_action('wp_enqueue_scripts', 'loadCSS');

//Load Fontawesome
function loadFontawesome() {
    wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', true);
    wp_enqueue_style('fontawesome');
}
add_action('wp_enqueue_scripts', 'loadFontawesome');

//Load Javascript
function loadJS() {
    
    wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'));
    wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'));
    // wp_enqueue_script('splide-script', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array('jquery'), null, true);
    wp_enqueue_script('aos-script', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array('jquery'), null, true);
    wp_enqueue_script('mainJS', get_template_directory_uri() . '/js/scripts.js','','1.1', true);
    wp_enqueue_script('swiffy-script', 'https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'loadJS');

//Enable Menu
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location'
    )
);

//Enable Featured Image
add_theme_support('post-thumbnails');

//Kirki Fields
function morunner_theme_kirki_sections($wp_customize) {
    //Add panels
    $wp_customize->add_section('morunner_basic_settings', array(
        'title' =>  __('MO Runner Basic Settings', 'kirki'),
        'priority' => 10,
        'panel' => '',
    ));
}
add_action('customize_register', 'morunner_theme_kirki_sections');

//Basic Fields in Customizer
function morunner_theme_kirki_fields($fields) {

    $fields[] = array(
        'type'          => 'image',
        'settings'      => 'morunner_favicon',
        'label'         => __('Favicon', 'kirki'),
        'description'   => __('Pick Your Favicon', 'kirki'),
        'section'       => 'morunner_basic_settings',
        'priority'      => 5,
        'default'       => ''
    );

    $fields[] = array(
        'type'          => 'image',
        'settings'      => 'morunner_top_logo',
        'label'         => __('MO Runner Logo for Top', 'kirki'),
        'description'   => __('Pick Your Logo', 'kirki'),
        'section'       => 'morunner_basic_settings',
        'priority'      => 10,
        'default'       => ''
    );

    $fields[] = array(
        'type'          => 'image',
        'settings'      => 'amtrack_top_logo',
        'label'         => __('Amtrack Logo for Top', 'kirki'),
        'description'   => __('Pick Your Logo', 'kirki'),
        'section'       => 'morunner_basic_settings',
        'priority'      => 10,
        'default'       => ''
    );

    $fields[] = array(
        'type'          => 'image',
        'settings'      => 'amtrack_bottom_logo',
        'label'         => __('Amtrack Logo for Footer', 'kirki'),
        'description'   => __('Pick Your Logo', 'kirki'),
        'section'       => 'morunner_basic_settings',
        'priority'      => 20,
        'default'       => ''
    );

    $fields[] = array(
        'type'          => 'image',
        'settings'      => 'morunner_bottom_logo',
        'label'         => __('MO Runner Logo for Footer', 'kirki'),
        'description'   => __('Pick Your Logo', 'kirki'),
        'section'       => 'morunner_basic_settings',
        'priority'      => 30,
        'default'       => ''
    );

    $fields[] = array(
        'type'          => 'checkbox',
        'settings'      => 'fairfinder-bottom-checkbox',
        'label'         => __('Fairfinder for Stops Pages', 'kirki'),
        'description'   => __('Check to display Fairfinder for all Stop Pages', 'kirki'),
        'section'       => 'morunner_basic_settings',
        'priority'      => 40,
        'default'       => ''
    );

    $fields[] = array(
        'type'          => 'image',
        'settings'      => 'fairfinder_background_image',
        'label'         => __('Fairfinder Bckground Image', 'kirki'),
        'description'   => __('Pick Your Background', 'kirki'),
        'section'       => 'morunner_basic_settings',
        'priority'      => 50,
        'default'       => '',
        'active_callback' => array(
            array(
                'setting'  => 'fairfinder-bottom-checkbox',
                'operator' => '==',
                'value'    => true,
            ),
        ),
    );

    $fields[] = array(
        'type'          => 'text',
        'settings'      => 'fairfinder_heading',
        'label'         => __('Fairfinder Heading', 'kirki'),
        'description'   => __('Enter the text for the Fairfinder Heading', 'kirki'),
        'section'       => 'morunner_basic_settings',
        'priority'      => 60,
        'default'       => '',
        'active_callback' => array(
            array(
                'setting'  => 'fairfinder-bottom-checkbox',
                'operator' => '==',
                'value'    => true,
            ),
        ),
    );

    $fields[] = array(
        'type'          => 'text',
        'settings'      => 'fairfinder_subheading',
        'label'         => __('Fairfinder Subheading', 'kirki'),
        'description'   => __('Enter the text for the Fairfinder Subheading', 'kirki'),
        'section'       => 'morunner_basic_settings',
        'priority'      => 70,
        'default'       => '',
        'active_callback' => array(
            array(
                'setting'  => 'fairfinder-bottom-checkbox',
                'operator' => '==',
                'value'    => true,
            ),
        ),
    );

    $fields[] = array(
        'type'          => 'text',
        'settings'      => 'amtrak_link',
        'label'         => __('Amtrak Link', 'kirki'),
        'description'   => __('Enter the text for the Amtrak Logo', 'kirki'),
        'section'       => 'morunner_basic_settings',
        'priority'      => 90,
        'default'       => '',
    );

  return $fields;
}
add_filter('kirki/fields', 'morunner_theme_kirki_fields');

/**
 * Add a block category for "MO Runner" if it doesn't exist already.
 *
 * @param array $categories Array of block categories.
 *
 * @return array
 */
function morunner_block_categories( $categories ) {
    $category_slugs = wp_list_pluck( $categories, 'slug' );
    return in_array( 'mor', $category_slugs, true ) ? $categories : array_merge(
        $categories,
        array(
            array(
                'slug'  => 'mor',
                'title' => __( 'MO Runner Blocks', 's3b' ),
                'icon'  => null,
            ),
        )
    );
}
add_filter( 'block_categories', 'morunner_block_categories' );


function theme_custom_sidebar() {
    register_sidebar(array(
        'name' => __('Your Sidebar', 'text-domain'),
        'id' => 'mo-runner-sidebar',
        'description' => __('Add widgets here to appear in your sidebar.', 'text-domain'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'theme_custom_sidebar');

//Custom Block Styles
function myguten_enqueue() {
    wp_enqueue_script(
        'myguten-script',
        get_stylesheet_directory_uri() . '/js/morguten.js',
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
        filemtime( plugin_dir_path( __FILE__ ) . '/js/morguten.js' )
    );
}
add_action( 'enqueue_block_editor_assets', 'myguten_enqueue' );

// Add Theme Support for Wide and Full Alignments
function theme_align_setup() {
    add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'theme_align_setup' );


// Add page slug as body class
function add_page_slug_body_class($classes) {
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_name;
    }
    return $classes;
}
add_filter('body_class', 'add_page_slug_body_class');

add_filter( 'unzip_file_use_ziparchive', '__return_false' );