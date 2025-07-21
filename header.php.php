<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Encabezado -->
    <header class="header">
        <div class="container">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo Heroes Car Rental" class="logo">
            </a>
            <nav>
                <?php
                wp_nav_menu([
                    'theme_location' => 'main-menu',
                    'menu_class' => 'main-menu',
                    'container' => 'ul',
                ]);
                ?>
            </nav>
        </div>
    </header>