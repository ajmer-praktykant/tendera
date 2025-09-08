<?php

function inzynieria_enqueue_scripts() {
    wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/css/slick.css', array(), null, 'all' );
    wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/css/slick-theme.css', array(), null, 'all' );
    wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/css/animate.css', array(), null, 'all' );
    wp_enqueue_style( 'lightbox-css', get_template_directory_uri() . '/css/lightbox.css', array(), null, 'all' );
    wp_enqueue_style( 'accordion-css', get_template_directory_uri() . '/css/jquery.accordion.css', array(), null, 'all' );
    wp_enqueue_style( 'aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), null, 'all' );
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css', array(), '1.0.30', 'all' );
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/main.css', array(), '1.0.284', 'all' );
    wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/css/style.css', array(), '1.0.291', 'all' );
    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), null, true );
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/js/slick.min.js', array(), null, true );
    wp_enqueue_script('slick-animation-js', get_template_directory_uri() . '/js/slick-animation.min.js', array(), null, true );
    wp_enqueue_script('keep-ratio-js', get_template_directory_uri() . '/js/jquery.keep-ratio.min.js', array(), null, true );
    wp_enqueue_script('matchHeight-js', get_template_directory_uri() . '/js/jquery.matchHeight-min.js', array(), null, true );
    wp_enqueue_script('lightbox-js', get_template_directory_uri() . '/js/lightbox.min.js', array(), null, true );
    wp_enqueue_script('accordion-js', get_template_directory_uri() . '/js/jquery.accordion.js', array(), null, true );
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, true );
    wp_enqueue_script('scripts-js', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.75', 'true' );
}

add_action( 'wp_enqueue_scripts', 'inzynieria_enqueue_scripts' );

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wp_generator');

add_theme_support('post-thumbnails');

register_nav_menus(array(
    'header_menu' => 'Menu główne',
    'city_menu' => 'Miasta',
    'footer_menu' => 'Menu w stopce',
    'lang_menu' => 'Przełącznik języka',
));

if (function_exists('acf_add_options_page')) {
    $parent = acf_add_options_page(array(
        'page_title' => 'Opcje motywu',
        'menu_title' => 'Opcje motywu',
        'redirect' => 'Opcje motywu',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Opcje motywu',
        'menu_title' => __('Opcje motywu', 'text-domain'),
        'menu_slug' => "acf-options",
        'parent' => $parent['menu_slug']
    ));

    $languages = array('pl', 'en');

    foreach ($languages as $lang) {
        acf_add_options_sub_page(array(
            'page_title' => 'Opcje motywu (' . strtoupper($lang) . ')',
            'menu_title' => __('Opcje motywu (' . strtoupper($lang) . ')', 'text-domain'),
            'menu_slug' => "options-${lang}",
            'post_id' => $lang,
            'parent' => $parent['menu_slug']
        ));
    }
}

function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'mytheme_add_woocommerce_support');
add_action( 'init', function() {
$GLOBALS['wp_rewrite']->pagination_base = 'strona';
} );

add_action( 'init', 'flush_rewrite_rules', 11 );

function getSectionContent($class, $style) {
    if(!empty(get_sub_field('id'))): $id = ' id="'.get_sub_field('id').'"'; else: $id = ' '; endif;
    $content = $id . $class . $style;
    return $content;
}

function getSectionClass($type) {
    if(!empty(get_sub_field('margin') && in_array('top', get_sub_field('margin')))): $margin_top = 'is--mt '; else: $margin_top = ''; endif;
    if(!empty(get_sub_field('margin') && in_array('bottom', get_sub_field('margin')))): $margin_bottom = 'is--mb '; else: $margin_bottom = ''; endif;
    if(!empty(get_sub_field('padding') && in_array('top', get_sub_field('padding')))): $padding_top = 'is--pt '; else: $padding_top = ''; endif;
    if(!empty(get_sub_field('padding') && in_array('bottom', get_sub_field('padding')))): $padding_bottom = 'is--pb '; else: $padding_bottom = ''; endif;
    $horizontal_alignment = get_sub_field('horizontal_alignment') . ' ';
    $class = 'class="' . $margin_top . $margin_bottom . $padding_top . $padding_bottom . $horizontal_alignment . $type . '"';
    return $class;
}

function getSectionStyle() {
    $visibility = get_sub_field('visibility');
    if(!empty($visibility)) : $set_visibility = 'display: none'; else: $set_visibility = ''; endif;
    if(!empty($visibility)) : $style = 'style="' . $set_visibility . '"'; else: $style = ''; endif;
    return $style;
}

function setSectionTag($heading, $state, $tag_content) {
    $tag_state = match ($state) {
            "open" => "<",
            "close" => "</",
        };
    if(!empty($heading)) :
        $tag_name = "section";
    else : 
        $tag_name = "div";
    endif;
    $tag = $tag_state . $tag_name . $tag_content .">";
    return $tag;
}

function makeBold($is_bold, $content) {
    if(!empty($is_bold)) :
        echo "<b>" . $content . "</b>";
    else:
        echo $content;
    endif;
}
