<footer class="footer">
    <!-- Footer about blog widget -->
    <div class="footer-about">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer about blog") ) : ?>
        <?php endif;?>
    </div>

    <!-- Footer twitter widget -->
    <div class="footer-tweets js-footer-tweets">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer twitter") ) : ?>
        <?php endif;?>
    </div>

    <!-- Footer instagram widget -->
    <div class="footer-instagram">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer instagram") ) : ?>
        <?php endif;?>
    </div>

    <!-- Footer latest comments widget -->
    <div class="footer-comments">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer comments") ) : ?>
        <?php endif;?>
    </div>

    <!-- Footer bottom line -->
    <div class="footer-bottom">
        <span class="footer-bottom__copyright">@2015 copyright. All right reserved by awesome theme</span>
        <a class="footer-bottom__link" href="404.php">Terms policy</a>
        <a class="footer-bottom__link" href="404.php">Disclaimer</a>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>