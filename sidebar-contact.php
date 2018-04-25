<aside class="sidebar js-sidebar">
    <div class="sidebar-content">
        <!-- Sidebar search widget -->
        <div class="sidebar-search">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar search") ) : ?>
            <?php endif;?>
        </div>

        <!-- Sidebar latest posts widget -->
        <div class="sidebar-posts">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar latest posts") ) : ?>
            <?php endif;?>
        </div>
    </div>
</aside>