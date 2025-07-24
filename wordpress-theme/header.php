<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=EB+Garamond:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <header class="site-header">
        <div class="container">
            <div class="header-content">
                <!-- Logo -->
                <a href="<?php echo home_url(); ?>" class="logo">
                    <div class="logo-icon">W</div>
                    <span><?php bloginfo('name'); ?></span>
                </a>
                
                <!-- Navigation Menu -->
                <nav class="main-nav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'nav-menu',
                        'container' => false,
                        'fallback_cb' => 'wegrowup_fallback_menu'
                    ));
                    ?>
                </nav>
                
                <!-- Mobile Menu Button (you can add mobile menu JS later) -->
                <button class="mobile-menu-toggle" style="display: none; background: none; border: none; font-size: 1.5rem; cursor: pointer;">
                    ☰
                </button>
            </div>
        </div>
    </header>