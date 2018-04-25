<aside class="sidebar js-sidebar">
    <div class="sidebar-content">
        <!-- Sidebar search widget -->
        <div class="sidebar-search">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar search") ) : ?>
            <?php endif;?>
        </div>

        <!-- Sidebar image widget - large -->
        <div class="sidebar-image large">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar image large") ) : ?>
            <?php endif;?>
        </div>

        <!-- Sidebar categories widget -->
        <nav class="sidebar-category">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar categories") ) : ?>
            <?php endif;?>
        </nav>

        <!-- Sidebar image widget - small -->
        <div class="sidebar-image small">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar image small") ) : ?>
            <?php endif;?>
        </div>

        <!-- Sidebar latest posts widget -->
        <div class="sidebar-posts">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar latest posts") ) : ?>
            <?php endif;?>
        </div>

        <!-- Sidebar social-media icons menu -->
        <div class="sidebar-sm">
            <?php
                wp_nav_menu( array( 'theme_location' => 'sidebar-social-media', 'container' => 'nav') );
            ?>
        </div>

        <!-- Sidebar slider widget -->
        <div class="sidebar-slider js-sidebar-slider">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar slider") ) : ?>
            <?php endif;?>
        </div>
    </div>
</aside>