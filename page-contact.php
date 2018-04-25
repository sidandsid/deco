<?php get_header(); ?>
    <div class="content-wrapper">
        <div class="post-wrapper contact">
            <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part( 'content-contact', get_post_format() );
            endwhile; endif;
            ?>
        </div>
        <?php get_template_part( 'sidebar-contact' ); ?>
    </div>
<?php get_footer(); ?>