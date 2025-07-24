<?php
// Theme setup
function wegrowup_theme_setup() {
    // Add theme support for various features
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => 'Menu Principal',
        'footer' => 'Menu do Rodapé'
    ));
    
    // Add custom image sizes
    add_image_size('card-thumbnail', 400, 250, true);
    add_image_size('hero-image', 1200, 600, true);
}
add_action('after_setup_theme', 'wegrowup_theme_setup');

// Enqueue styles and scripts
function wegrowup_scripts() {
    wp_enqueue_style('wegrowup-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_script('wegrowup-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'wegrowup_scripts');

// Fallback menu if no menu is assigned
function wegrowup_fallback_menu() {
    echo '<ul>';
    echo '<li><a href="' . home_url() . '">Início</a></li>';
    echo '<li><a href="' . home_url('/sobre') . '">Sobre</a></li>';
    echo '<li><a href="' . home_url('/servicos') . '">Serviços</a></li>';
    echo '<li><a href="' . home_url('/blog') . '">Blog</a></li>';
    echo '<li><a href="' . home_url('/contato') . '">Contato</a></li>';
    echo '</ul>';
}

// Custom excerpt length
function wegrowup_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'wegrowup_excerpt_length');

// Custom excerpt more
function wegrowup_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'wegrowup_excerpt_more');

// Register widget areas
function wegrowup_widgets_init() {
    register_sidebar(array(
        'name' => 'Sidebar Principal',
        'id' => 'primary-sidebar',
        'description' => 'Sidebar principal do site',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => 'Footer Widget 1',
        'id' => 'footer-1',
        'description' => 'Primeira área de widget do rodapé',
        'before_widget' => '<div class="footer-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'wegrowup_widgets_init');

// Add custom meta boxes for pages
function wegrowup_add_meta_boxes() {
    add_meta_box(
        'wegrowup-page-options',
        'Opções da Página',
        'wegrowup_page_options_callback',
        'page',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'wegrowup_add_meta_boxes');

function wegrowup_page_options_callback($post) {
    wp_nonce_field('wegrowup_save_meta', 'wegrowup_meta_nonce');
    
    $show_hero = get_post_meta($post->ID, '_wegrowup_show_hero', true);
    $hero_title = get_post_meta($post->ID, '_wegrowup_hero_title', true);
    $hero_subtitle = get_post_meta($post->ID, '_wegrowup_hero_subtitle', true);
    
    echo '<table style="width: 100%;">';
    echo '<tr><td><label for="wegrowup_show_hero">Mostrar seção hero:</label></td>';
    echo '<td><input type="checkbox" id="wegrowup_show_hero" name="wegrowup_show_hero" value="1" ' . checked(1, $show_hero, false) . '></td></tr>';
    
    echo '<tr><td><label for="wegrowup_hero_title">Título do Hero:</label></td>';
    echo '<td><input type="text" id="wegrowup_hero_title" name="wegrowup_hero_title" value="' . esc_attr($hero_title) . '" style="width: 100%;"></td></tr>';
    
    echo '<tr><td><label for="wegrowup_hero_subtitle">Subtítulo do Hero:</label></td>';
    echo '<td><input type="text" id="wegrowup_hero_subtitle" name="wegrowup_hero_subtitle" value="' . esc_attr($hero_subtitle) . '" style="width: 100%;"></td></tr>';
    echo '</table>';
}

function wegrowup_save_meta($post_id) {
    if (!isset($_POST['wegrowup_meta_nonce']) || !wp_verify_nonce($_POST['wegrowup_meta_nonce'], 'wegrowup_save_meta')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['wegrowup_show_hero'])) {
        update_post_meta($post_id, '_wegrowup_show_hero', 1);
    } else {
        update_post_meta($post_id, '_wegrowup_show_hero', 0);
    }
    
    if (isset($_POST['wegrowup_hero_title'])) {
        update_post_meta($post_id, '_wegrowup_hero_title', sanitize_text_field($_POST['wegrowup_hero_title']));
    }
    
    if (isset($_POST['wegrowup_hero_subtitle'])) {
        update_post_meta($post_id, '_wegrowup_hero_subtitle', sanitize_text_field($_POST['wegrowup_hero_subtitle']));
    }
}
add_action('save_post', 'wegrowup_save_meta');

// Custom post types (example for services)
function wegrowup_custom_post_types() {
    register_post_type('servicos', array(
        'labels' => array(
            'name' => 'Serviços',
            'singular_name' => 'Serviço',
            'add_new' => 'Adicionar Novo',
            'add_new_item' => 'Adicionar Novo Serviço',
            'edit_item' => 'Editar Serviço',
            'new_item' => 'Novo Serviço',
            'view_item' => 'Ver Serviço',
            'search_items' => 'Buscar Serviços',
            'not_found' => 'Nenhum serviço encontrado',
            'not_found_in_trash' => 'Nenhum serviço encontrado na lixeira'
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-admin-tools',
        'rewrite' => array('slug' => 'servicos')
    ));
}
add_action('init', 'wegrowup_custom_post_types');

// Security enhancements
function wegrowup_remove_wp_version() {
    return '';
}
add_filter('the_generator', 'wegrowup_remove_wp_version');

// Remove unnecessary meta tags
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

?>