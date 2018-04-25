<div <?php post_class( array( 'post') ) ?> >
    <div class="post-featured-image">
        <?php
        if ( has_post_thumbnail() ){
            the_post_thumbnail( 'full' );
            }
        ?>
    </div>
    <div class="post-content">
        <h2 class="post-title"><?php the_title(); ?></h2>
        <span class="post-author">
            <?php get_template_part('assets/svg/inline', 'user.svg'); ?>
            <?php the_author_posts_link(); ?>
        </span>
        <span class="post-date">
            <?php get_template_part('assets/svg/inline', 'calendar.svg'); ?>
            <?php the_time( get_option( 'date_format' ) ); ?>
        </span>
        <?php the_content(); ?>
    </div>
</div>