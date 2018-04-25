<form class="sidebar-search" action="<?php echo home_url( '/' ) ?>" method="get">
    <input class="sidebar-search__input" type="text" value="<?php echo get_search_query() ?>" name="s" placeholder="Search">
    <button class="sidebar-search__btn" type="submit">
        <?php get_template_part('assets/svg/inline', 'search.svg'); ?>
    </button>
</form>