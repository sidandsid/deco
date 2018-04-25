<div class="banner">
    <div class="banner-slider">
        <?php
            wp_nav_menu( array('theme_location' => 'recent-posts', 'menu_class' => 'banner-slider__list js-banner-slider__list') );
        ?>
    </div>
    <div class="banner-signup">
        <h3 class="banner-signup__title">Signup to Newsletter</h3>
        <input class="banner-signup__input name" type="text" placeholder="Your name" required="">
        <input class="banner-signup__input address" type="email" placeholder="Your email address" required="">
        <button class="banner-signup__btn" type="submit">Subscribe now</button>
    </div>
</div>