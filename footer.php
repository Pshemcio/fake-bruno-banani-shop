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

        <h2 class="newsletter__heading">Zapisz się do naszego newslettera żeby dostać 15% zniżkę na następne zamówienie!
        </h2>

        <?php echo do_shortcode('[newsletter]'); ?>

    </section>
    <div class="site-footer__wrapper">
        <div class="footer-container">
            <?php
            wp_nav_menu( array(
                'menu' => '22',
                'menu_class' => 'footer-container__body'
            ));
            ?>
        </div>

        <div class="footer-container">
            <ul class="site-footer__socials">
                <li class="site-footer__social">
                    <a href="">
                        <i class="fab fa-github-square"></i> Github
                    </a>
                </li>
                <li class="site-footer__social">
                    <a href="">
                        <i class="fab fa-linkedin"></i> Linkedin
                    </a>
                </li>
            </ul>
        </div>

        <div class="footer-container">
            <?php
            wp_nav_menu( array(
                'menu' => '23',
                'menu_class' => 'footer-container__body'
            ));
            ?>
        </div>
    </div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>