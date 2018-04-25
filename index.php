<?php get_header(); ?>
<?php get_template_part( 'banner' ); ?>
    <div class="content-wrapper index">
        <div class="post-wrapper">
            <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part( 'content', get_post_format() );
                endwhile; endif;
            ?>
        </div>
        <?php get_sidebar() ?>
    </div>
<?php get_footer(); ?>