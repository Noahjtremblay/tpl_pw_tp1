<!DOCTYPE html>
<html lang="fr" data-scrollpercent="0.3" data-no-scroll>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title('|', true, 'right') ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/dist/styles/main.css" />

    <script>
        // À décommenter lorsque rendu dans le fichier .php pour que les icônes fonctionnent dans WP
         iconsPath = '<?php bloginfo('template_url') ?>/dist/';
    </script>
    <script src="<?php bloginfo('template_url') ?>/dist/scripts/main.js" defer></script>
</head>

<body <?php body_class(); ?>>

    <header class="header" data-component="Header">
        <div class="wrapper">
            <a href="<?php bloginfo('url'); ?>" class="logo"><?php bloginfo('name'); ?></a>
            <?php wp_nav_menu(array(
                'theme_location' => 'menu_principal',
                'container' => 'nav',
                'container_class' => 'nav-primary',
            )); ?>
            <button class="header__toggle js-toggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

    </header>