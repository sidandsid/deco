<div <?php post_class( array( 'post') ) ?> >
    <div class="post-content">
        <div class="post-contact">
            <div class="post-contact__map" id="js-map"></div>
            <div class="post-contact__info">
                <h2 class="post-contact__title">Contact information</h2>
                <p class="post-contact__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet cumque dolores iure iusto, omnis perspiciatis praesentium quae quas sint ut.</p>
                <div class="post-contact__item address">
                    <?php get_template_part('assets/svg/inline', 'home.svg'); ?>
                    <span class="post-contact__item-text">Address: 123 Street Name, City Name, United States.</span>
                </div>
                <div class="post-contact__item email">
                    <?php get_template_part('assets/svg/inline', 'email.svg'); ?>
                    <span class="post-contact__item-text">Email: user@domain.com.</span>
                </div>
                <div class="post-contact__item website">
                    <?php get_template_part('assets/svg/inline', 'web.svg'); ?>
                    <span class="post-contact__item-text">www.domain.com</span>
                </div>
            </div>
        </div>
        <form class="post-contact__form js-post-contact__form">
            <input class="post-contact__form-input name" type="text" placeholder="Your name" required="">
            <input class="post-contact__form-input email" type="email" placeholder="Your email address" required="">
            <input class="post-contact__form-input address" type="text" placeholder="Website address">
            <textarea class="post-contact__form-msg" placeholder="Please write a message here!" required=""></textarea>
            <button class="post-contact__form-btn" type="submit">Send message</button>
        </form>
        <?php the_content(); ?>
    </div>
</div>