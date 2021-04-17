<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Shop_Theme
 */

?>

<footer id="site-footer" class="site-footer">
    <section class="newsletter">
        <div class="newsletter__wrapper">
            <h3 class="newsletter__heading">Newsletter</h3>
            <p class="newsletter__paragraph">
                Zapisz się do naszego newslettera żeby dostać 15% zniżkę na następne zamówienie!
            </p>

            <?php echo do_shortcode('[newsletter]'); ?>
        </div>
    </section>
    <div class="site-footer__wrapper">
        <div class="footer-container">
            <?php
            wp_nav_menu( array(
                'menu' => '22',
                'menu_class' => 'site-footer__container--inner'
            ));
            ?>
        </div>

        <div class="site-footer__container">
            <?php
            wp_nav_menu( array(
                'menu' => '23',
                'menu_class' => 'site-footer__container--inner'
            ));
            ?>
        </div>

        <div class="site-footer__socials">
            <a href="https://github.com/Pshemcio" target="_blank" class="site-footer__social">
                <i class="fab fa-github-square"></i> Github
            </a>
            <a href="https://www.linkedin.com/in/przemys%C5%82aw-majka-9540b01b7/" target="_blank"
                class="site-footer__social">
                <i class="fab fa-linkedin"></i> Linkedin
            </a>
        </div>
    </div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>