<!doctype html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 not found</title>
    <style>
        <?php include 'assets/css/style.min.css'; ?>
    </style>
</head>
<body>
    <div class="lost">
        <div class="lost-logo">
            <span class="lost-logo__number">404</span>
            <div class="lost-logo__tagline">
                <span class="lost-logo__tagline-title">Uh-oh! nothing found</span>
            </div>
        </div>
        <form class="lost-form" action="<?php echo home_url( '/' ) ?>" method="get">
            <input class="lost-form__input" type="text" value="<?php echo get_search_query() ?>" name="s" placeholder="Type any keyword">
            <button class="lost-form__btn" type="submit">Search</button>
        </form>
        <div class="lost-title">
            <span class="lost-title__main">Sorry!</span>
            <br>
            <span class="lost-title__subtitle">The page you are looking for does not exist or another error occurred</span>
        </div>
        <div class="lost-home">
            <?php get_template_part('assets/svg/inline', 'home.svg'); ?>
            <a class="lost-home__link" href="<?php echo site_url(); ?>">Go back home</a>
        </div>
    </div>
</body>
</html>