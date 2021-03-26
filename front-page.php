<?php get_header(); ?>
<section class="hero">
    <div class="hero__wrapper hero__wrapper--mans-best">
        <div class="hero__container">
            <h2 class="hero__heading">Man's Best</h2>
            <p class="hero__info">Zapach prawdziwego mężczyzny</p>
            <a href="produkt/mans-best-edt/" class="hero__button">Odkrywaj</a>
        </div>
    </div>
</section>

<section class="hero">
    <div class="hero__wrapper hero__wrapper--womans-best">
        <div class="hero__container">
            <h2 class="hero__heading">Woman's Best</h2>
            <p class="hero__info">Zapach prawdziwej damy</p>
            <a href="produkt/mans-best-edt/" class="hero__button">Odkrywaj</a>
        </div>
    </div>
</section>

<section class="front-categories">
    <h2 class="front-categories__heading">Nasze kategorie</h2>
    <div class="front-categories__wrapper">
        <div class="front-categories__container front-categories__container--men">
            <h3 class="front-categories__inner-heading">wybór mężczyzn</h3>
            <a href="/dla-niego" class="front-categories__button">Wszystko dla niego</a>
        </div>
        <div class="front-categories__container front-categories__container--women">
            <h3 class="front-categories__inner-heading">wybór kobiet</h3>
            <a href="/dla-niej" class="front-categories__button">Wszystko dla niej</a>
        </div>
    </div>
</section>

<section class="front-about">
    <h1 class="front-about__heading">bruno banani
        <span class="front-about__heading-info">wszystko czego
            potrzebujesz
        </span>
    </h1>
    <p class="front-about__paragraph">
        Typical bruno banani: The cult international underwear and swimwear brand, based in Chemnitz in eastern Germany,
        has been revolutionising underwear drawers the world over since 1993. Founded by trained economist Wolfgang
        Jassner, the company was making marketing and sales history in no time. Campaigns such as getting Tongan Luger
        Fuahea Semi to compete under the name Bruno Banani at the Olympics or testing bruno banani underwear in orbit on
        the Mir space station brought the family business to international prominence. bruno banani now exports to 17
        countries worldwide and has issued a range of product licenses. Its products are available through the online
        shop, in outlet stores, and from selected specialist retailers.
    </p>
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