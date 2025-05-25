<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="header-top">
        <div class="header-contact">
            <span>+221 33 864 22 09</span>
            <span>+221 30 105 27 42</span>
        </div>
    </div>
    
    <div class="nav-container">
        <div class="site-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php 
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    echo esc_html(get_bloginfo('name')); 
                }
                ?>
            </a>
        </div>
        
        <nav class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'container' => false,
                'menu_class' => 'nav-menu',
                'fallback_cb' => false
            ));
            ?>
        </nav>
    </div>
</header>

<?php if(is_front_page()): ?>
<div class="hero-slider">
    <div class="hero-slide" style="background-image: url('<?php echo esc_url(get_theme_file_uri('assets/images/hero-1.jpg')); ?>');">
        <div class="slide-content">
            <h2 class="slide-title">Bienvenue à la Commune de Kayemor</h2>
            <p class="slide-description">Découvrez notre belle commune et ses projets de développement</p>
            <a href="#" class="slide-link">Plus de détails</a>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="site-content">
