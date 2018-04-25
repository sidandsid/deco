<?php get_header(); ?>
    <div class="content-wrapper">
        <div class="post-wrapper about">
            <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part( 'content-about', get_post_format() );
            endwhile; endif;
            ?>
        </div>
        <?php get_template_part( 'sidebar-about' ); ?>
    </div>
<?php get_footer(); ?>