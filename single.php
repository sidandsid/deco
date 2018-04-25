<?php get_header(); ?>
<?php get_template_part( 'banner' ); ?>
    <div class="content-wrapper">
        <div class="post-wrapper single">
            <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part( 'content-single', get_post_format() );
            endwhile; endif;
            ?>
            <ul class="post-nav">
                <li class="post-nav__link prev">
                    <?php previous_post_link('%link', 'Previous post') ?>
                    <?php get_template_part('assets/svg/inline', 'arrow-left.svg'); ?>
                </li>
                <li class="post-nav__link next">
                    <?php next_post_link('%link', 'Next post') ?>
                    <?php get_template_part('assets/svg/inline', 'arrow-right.svg'); ?>
                </li>
            </ul>
            <?php get_template_part( '/assets/lib/recommended-posts' );?>
        </div>
        <?php get_sidebar() ?>
    </div>
<?php get_footer(); ?>