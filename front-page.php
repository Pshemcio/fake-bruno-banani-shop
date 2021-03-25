<?php get_header(); ?>
<section class="hero">
    <div class="hero__wrapper">
        <div class="hero__container">
            <span class="hero__info">Odkryj nowy zapach</span>
            <h1 class="hero__heading">Man's Best - EdT</h1>
            <a href="/nowosci" class="hero__button">Odkrywaj</a>
        </div>
    </div>
</section>

<section class="standard-promo">
    <a href="http://woocommerce-shop.com/kobiecy-swiat/" class="promo-card promo-card--gray promo-card--women">
        <h2 class="promo-card__heading">Shop Women</h2>
        <p class="promo-card__body">Women's new arrivals. It's time to explore your options.</p>
    </a>
    <a href="http://woocommerce-shop.com/meski-swiat/" class="promo-card promo-card--gray promo-card--men">
        <h2 class="promo-card__heading">Shop Men</h2>
        <p class="promo-card__body">Mens's new arrivals. It's time to explore your options.</p>
    </a>
</section>

<section class="shop-section">
    <h2 class="shop-section__heading">Women's Best Sellers</h2>
    <p class="shop-section__body">Our women's bestsellers. They are smooth and soft<br /> with adjustable elastic loop.
    </p>
    <div class="items">
        <?php echo do_shortcode('[recent_products tag="women-front-page" limit="4"]'); ?>
    </div>
</section>

<section class="shop-section">
    <h2 class="shop-section__heading">New Arrivals</h2>
    <p class="shop-section__body">New arrivals. Updated every<br /> day. It's time to explore.</p>
    <div class="items">
        <?php echo do_shortcode('[products limit="4" orderbyid="id" order="DESC"]'); ?>
    </div>
</section>





<?php get_footer(); ?>