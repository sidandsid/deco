<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <!-- Adding svg sprite -->
    <?php get_template_part( 'assets/svg/sprite.svg' ); ?>

    <header class="header">
        <!-- Header page navigation menu -->
        <div class="header-menu">
            <div class="header-menu__burger js-header-menu__burger">
                <span class="header-menu__burger-line js-header-menu__burger-line"></span>
            </div>
            <?php
                wp_nav_menu( array( 'theme_location' => 'header-navigation', 'container' => 'nav', 'container_class' => 'header-menu__nav js-header-menu__nav' ) );
            ?>
        </div>

        <!-- Header logo widget -->
        <div class="header-logo">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Header logo") ) : ?>
            <?php endif;?>
        </div>

        <!-- Header social-media icons menu -->
        <div class="header-nav">
            <?php
                wp_nav_menu( array('theme_location' => 'header-social-media', 'container' => 'nav', 'menu_class' => 'header-nav__sm' ) );
            ?>
        </div>

        <!-- Search -->
        <div class="header-search">
            <div class="header-search__icon js-header-search__icon">
                <?php get_template_part('assets/svg/inline', 'search.svg'); ?>
            </div>
            <form class="header-search__form js-header-search__form" action="<?php echo home_url( '/' ) ?>" method="get">
                <input class="header-search__input" type="text" value="<?php echo get_search_query() ?>" placeholder="Search" name="search">
                <button class="header-search__btn" type="submit">Go</button>
            </form>
        </div>
    </header>